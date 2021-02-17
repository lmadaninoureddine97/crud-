<?php
$pageName ='';
include_once 'database.php';
include "navbar.php";
$sql = "DELETE FROM livers WHERE id='" . $_GET["de_id"] . "'";
if (mysqli_query($connect, $sql)) {
    echo "<h1 style='color:red;background-color:#F3F3F3'>Record deleted successfully</h1>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>
<?php include "foot.php";