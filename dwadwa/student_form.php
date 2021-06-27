<?php require_once 'templates/header.php';?>
<h1>Add Students</h1>
<form action="vendor/add_student.php" method="POST">
<input type="text" name="full_name" placeholder="Имя"><br>
<input type="number" name="group_num" placeholder="Номер группы"><br>
<input type="number" name="cource" placeholder="Курс"><br>
<button type="submit">Add</button><br>
</form>