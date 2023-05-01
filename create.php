<?php

include 'connection.php';

if(isset($_POST['submit'])){
   $first_name = $_POST['firstname'];
   $last_name = $_POST['lastname'];
   $password = $_POST['password'];
   $gender = $_POST['gender'];
   $sql = ("INSERT INTO users(fname,lname,email,password,gender) VALUES($first_name,$last_name,$email,$password,$gender)");

   $result = $conn -> query(sql);
   if($result == true){
    echo "New record created successfully";
   }else{
    echo "Error:".$sql."<br>".$conn -> error;
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styling.css">
    <title>CRUD</title>
</head>
<body>
<div class="mainbar">
        <ul>
           <li><a href="index.php">HOME</a></li>
           <li><a href="create.php">ADD USER</a></li>
           <li><a href="#">HELP</a></li>
           <li><a href="signUp.php">LOG OUT</a></li>
        </ul>
    </div>
    <h1>Add a New User</h1>
    <form action="create.php" method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            First Name:<br>
            <input type="text" name="fname"><br>
            Last Name:<br>
            <input type="text" name="lname"><br>
            Email:<br>
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="password"> <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="female">Female<br>
            <input type="submit" name="submit" value="Save">
            <button><a href="index.php">Cancel</a></button>
        </fieldset>
    </form>
</body>
</html>