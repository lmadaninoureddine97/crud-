


<style>
.form p{
    
    background-color:#F3F3F3;
    position:absolute;
    top:-70px;
    
}
.form a{
    color:#fff;
    font-size:34px;
    text-decoration:none
}

</style>


<?php
 $pageName ='';
include_once 'database.php';
include "navbar.php";
if(count($_POST)>0) {
mysqli_query($connect,"UPDATE livers set tit='" . $_POST['title'] . "', autho='" . $_POST['author'] . "', image='" . $_POST['image'] . "', piblished='" . $_POST['published'] .  "' WHERE id='" . $_POST['id'] . "'");
$message = "<p style='color:green;font-size:20px'>Record Modified Successfully</p>";
}
$result = mysqli_query($connect,"SELECT * FROM livers WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<head>
<title>Update Employee Data</title>
</head>
<div class="form">
<form name="" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>




<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">

<br>
title: <br>
<input type="text" name="title" value="<?php echo $row['tit']; ?>">
<br>
author :<br>
<input type="text" name="author"  value="<?php echo $row['autho']; ?>">
<br>
image:<br>
<input type="text" name="image" value="<?php echo $row['image']; ?>">
<br>
published:<br>
<input type="text" name="published"  value="<?php echo $row['piblished']; ?>">
<br>
<input type="submit" name="save" value="Submit" class="buttom">


</form>
</div>
<?php include "foot.php"?>
