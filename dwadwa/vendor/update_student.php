<?php

require_once 'connect.php';

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$group_num = $_POST['group_num'];
$cource = $_POST['cource'];

mysqli_query($connect, "UPDATE `users` SET `full_name` = '$full_name', `group_num` = '$group_num', `cource` = '$cource' WHERE `users`.`id` = '$id'");

header('Location: ../students.php');

?>