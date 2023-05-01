<?php 
 include "connection.php";
 if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $sql = "INSERT INTO users(fname,lname,email,password,gender) VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $result = $conn->query($sql);
    if ($result == true) {
        echo "<br> User registered successfully!";
    } else {
        echo "Erro:".$sql."<br>".$conn->error;
    }
    $conn->close();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styling.css">
    <title>CRUD</title>
</head>
<body>
    <h1>Signup Here</h1>
    <form action="signUp.php" method="POST">
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
            <input type="submit" name="submit" value="Login">
        </fieldset>
    </form>
</body>
</html>