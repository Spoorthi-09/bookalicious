<?php

include("connect.php");

$name = $email = $password = $con_pass="";
$email_err =$password_err=$con_pass_err="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST["name"];

    $sql = "select id from user where email = ?"
    if($stmt = mysqli_prepare($link,$sql)){
        mysqli_stmt_bind_param($stmt,"s",$param_email);
        $param_email = $_POST["email"];

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt)==1){
                $email_err = "The email already exists";
            }
            else
            $email = $_POST["email"];
        }
    }




}













?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <h1>Sign Up</h1>

<form action = "post">
    <label> Name :</label>
    <input type = "text" name = "name" required>
    <br><br>
    <label> email :</label>
    <input type="email" name="email" id="" required>
    <br><br>
    <label> Password :</label>
    <input type="password" name="password" id="">
    <br><br>
    <label> Confirm password :</label>
    <input type="password" name="con_pass" id="">
    <br><br>
    <input type = "submit" value = "Submit">

</form>
    
</body>
</html>