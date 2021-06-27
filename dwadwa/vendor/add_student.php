<?php

require_once 'connect.php';

$full_name = $_POST['full_name'];
$group_num = $_POST['group_num'];
$cource = $_POST['cource'];

mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `group_num`, `cource`) VALUES (NULL, '$full_name', '$group_num', '$cource')");

header('Location: ../students.php');
?>