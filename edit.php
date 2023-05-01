<?php
include "connection.php";

$id = "";
$fname = "";
$lname = "";
$email = "";
$password = "";
$gender = "";

$error ="";
$success = "";

if($_SERVER["REQUEST_METHOD"] == 'GET'){
    if(!isset($_GET["id"])){
        header("Location:index.php");
        exit;
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM Users where id = $id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();
    while(!$row){
        header("Location:index.php");
        exit;
    }

    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $password = $row['password'];
}else{
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE Users SET fname = '$fname', lname = '$lname', email = '$email',password = '$password' WHERE id = '$id'";
    $result = $conn -> query($sql);
    echo "Updated successfully";
}
?>