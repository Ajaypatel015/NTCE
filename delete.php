<?php
require_once "connect.php";

$id=$_GET['id'];

$query="DELETE FROM `registration` WHERE id=$id";    
$result=mysqli_query($conn,$query);
    if($result){
        echo " <script> alert(' Data Deleted ') </script>";
    }else{
        echo "Error";
    }
?>