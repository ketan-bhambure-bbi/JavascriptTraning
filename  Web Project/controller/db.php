<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db='ToDo';
$conn = mysqli_connect($db_host, $db_user, $db_password,$db);
if($conn){
    echo "success";
}
 
?>
 