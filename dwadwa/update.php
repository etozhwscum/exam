<?php  require_once 'vendor/connect.php';?>
<?php  require_once 'templates/header.php';?>
<?php

$id_update = $_GET['id'];

?>
<h1>Update student info</h1>
<?php

?>

<form action="vendor/update_student.php" method="POST">
<input type="hidden" name="id" value="<?=$id_update?>"><br>
<input type="text" name="full_name" placeholder="Имя"><br>
<input type="number" name="group_num" placeholder="Номер группы"><br>
<input type="number" name="cource" placeholder="Курс"><br>
<button type="submit">Save</button><br>
</form>

<?php

?>
