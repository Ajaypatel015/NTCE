<?php

$hostname = "localhost";
$usre = "root";
$dbpass = "";
$dbname ="school";

$conn = mysqli_connect($hostname,$usre,$dbpass,$dbname);

if($conn){
    echo "database connect";
}
else{
    echo"database not -connect";
}
?>