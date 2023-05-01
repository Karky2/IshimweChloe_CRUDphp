<?php
include "connection.php";

$sql = "SELECT * FROM Users";
$result = $conn -> query($sql);
if(!$result){
    die("Invalid query written");
} while($row = $result -> fetch_assoc()){
    echo "
    <tr>
    <td>$row[id]>/td>
    <td>$row[fname]>/td>
    <td>$row[lname]>/td>
    <td>$row[email]>/td>
    <td>$row[password]>/td>
    <td>$row[gender]>/td>
    <a href = 'edit.php?id=%row[id]'>Edit</a>
    <a href = 'delete.php?id=%row[id]'>Delete</a>
    ";
}
?>