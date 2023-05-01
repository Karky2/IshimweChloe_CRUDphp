<?php
$servername = 'localhost';
$username = 'root';
$password = 'chloe@12';
$db_name = 'student_db';
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn -> connect_error){
    die("Connection failed".$conn -> $connect_error);
}
else{
    echo "Connected to mysqli successfully";
}
?>