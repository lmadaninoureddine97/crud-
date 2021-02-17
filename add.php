<?php $pageName ='';
include "navbar.php";   ?>

<div class="form">
<form action="procces.php" method="POST">
title: <br>
<input type="text"name="title"><br>
author:<br>
<input type="text"name="author"><br>
image:<br>
<input type="text" name="image" id=""><br>
published:<br>
<input type="text" name="published"> <br>
<input type="submit" name="save" value="save">
</form>
</div>

    
<?php
    include "foot.php";
    ?>
