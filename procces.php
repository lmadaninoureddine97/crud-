<?php
 $pageName ='';
include 'navbar.php';

include_once "database.php";
if(isset($_POST['save'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $image=$_POST['image'];
    $published=$_POST['published'];
    $sql="INSERT INTO livers(tit,autho,image,piblished) VALUES('$title','$author','$image','$published')";
    if(mysqli_query($connect,$sql)){
        // echo "new items added";
        echo "<br>";
        // echo "<a href='retrieve.php' style='font-size:45px'>liste of books</a>";

    
    }
    else{
        echo "not added";
    }

}
?>

    <div class="insert">
        <span style='background-color:#F3F3F3'>new items added successfully !</span>
    </div>
    <!-- <div class="foot">library @copyrights 2020/2021</div> -->
    <?php
    include "foot.php";
    ?>
