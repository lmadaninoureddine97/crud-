<?php
$serverName="localhost";
$userName="root";
$passWord="";
$dbName="library";
$connect=mysqli_connect($serverName,$userName,$passWord,$dbName);
if(!$connect){
    die("connection firld:".mysqli_connect_error());
}

