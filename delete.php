<?php
include "connection.php";

if(isset($GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE from `Users` where id = $id";
    $conn -> query($sql);
    echo " A user is deleted successfully";
}

headear('Location:index.php');
?>