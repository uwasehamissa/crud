<?php
include "db.php";
?>
<html>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Add Student</h2>
    <form method="POST">
        <input type="text" value="" name="name" placeholder="Enter name" required>
        <input type="email" value="" name="email" placeholder="Enter email" required>
        <button type="submit" value="" name="save">Save</button>
    </form>
</div>

</html>
<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $connect->query("INSERT INTO students(name, email) VALUES('$name', '$email')");
    header("Location:index.php ");
}
?>