<?php
include "db.php";
$id = $_GET['id'];
$student = $connect->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Update Student</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= $student['name'] ?>" required>
        <input type="email" name="email" value="<?= $student['email'] ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
</div>
<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $connect->query("UPDATE students SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>