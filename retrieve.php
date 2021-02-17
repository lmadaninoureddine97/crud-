<?php
include_once "database.php";
$pageName = 'books';
include "navbar.php"; 


$result=mysqli_query($connect,"SELECT * from livers");
?>
<p  style="position: absolute;right: 200px;top: 100px;background-color: #6304fc;color: #fff; cursor: pointer;border-radius: 5px;"> <a href="add.php"  style="color: #fff; text-decoration: none;; " >add books</a> </p>


    <table>
    <tr>
    <th>id</th>
    <th>title</th>
    <th>author</th>
    <th>image</th>
    <th>published</th>
    <th colspan="2">action</th>
    </tr>
   


<?php
if(mysqli_num_rows($result)>0){
   
   
   
    $i=0;
    while($row=mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $row['id'];?>  </td>
    <td><?php echo $row['tit'];?>  </td>
    <td><?php echo $row['autho'];?>  </td>
    <td><?php echo $row['image'];?>  </td>
    <td><?php echo $row['piblished'];?>  </td>
    <td><a style="border:none; background-color:#6001FF;color:#fff;padding:6px;text-decoration:none;" href="update.php?id=<?php echo $row["id"];?>">update</a>  </td>
  
    <td ><input  style="border:none; background-color:#6001FF;color:#fff;padding:6px; font-family: 'Oswald', sans-serif;font-size:16px;cursor:pointer" type="button" onclick="deleteme(<?php echo $row['id'];?>)" name="delete" value="delete" ></td>
    
    </tr>
    <?php $i++ ;
    }
    ?>
    
     </table>
    
    



<?Php
}
else{
    echo "<p style='color:red;font-size:35px'> nothing to show</p>";
}
?>

    
    <script>
    function deleteme(delid){
        if(confirm("do you want delete")){
            window.location.href="delete.php?de_id="+delid+'';
            return true;
        }
    }
    </script>
<?php
    include "foot.php";
    ?>
