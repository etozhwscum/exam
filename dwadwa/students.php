<?php require_once 'templates/header.php';?>
<h1>Students List</h1>

<?php
    require_once 'vendor/connect.php';
    $find_user = "SELECT * FROM users";
    $res = mysqli_query($connect, $find_user);
    if(!empty($_GET['del']) && !empty((int)$_GET['id'])){
        $id = (int)$_GET['id'];
        $delete_user = "DELETE FROM users WHERE id=$id";
        $res = mysqli_query($connect, $delete_user);
    }
    $delete_user = "SELECT * FROM users";
    $res = mysqli_query($connect, $delete_user);
    while($user = mysqli_fetch_assoc($res)){
        ?>
        <h3><?=$user['full_name'];?></h3>
        <a href="update.php/?id=<?=$user['id'];?>">Update</a>
        <a href="?del=ok&id=<?=$user['id'];?>">Remove</a>
        <p>Group: <?=$user['group_num']?></p>
        <p>Cource: <?=$user['cource']?></p>
        <?php
    }
?>

<a href="student_form.php">Add Student</a>