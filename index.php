<?php
include "db.php";
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Students List</h2>
    <a href="create.php">Add New Student</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $connect->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="delete" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>