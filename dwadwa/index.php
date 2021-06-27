<?php 
require_once 'templates/header.php';
?><br>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Cource</th>
            <th>Group</th>
        </tr>

        <?php

            $users = mysqli_query($connect, "SELECT * FROM `users`");

            $users = mysqli_fetch_all($users);

            foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?= $user[0] ?></td>
                        <td><?= $user[1] ?></td>
                        <td><?= $user[3] ?></td>
                        <td><?= $user[2] ?></td>
                        <td><a href="update.php?id=<?= $user[0] ?>">Update</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $user[0] ?>">Delete</a></td>
                        <td><a style="color: green;" href="student_form.php">Add</a></td>
                    </tr>
                <?php
            }
        ?>
</body>
</html>