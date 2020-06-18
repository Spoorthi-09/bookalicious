<?php



include("connect.php");



$name = $email = $password = $con_pass="";

$emai_err= $password_err= $con_pass_err="";



if($_SERVER["REQUEST_METHOD"] == "POST")

{

 //taking the input from the post req   

$name = $_POST["name"];

$email = $_POST["email"];



//checking if email field ids checked

   if(isset($_POST["email"])){

         $sql ="SELECT id FROM `user` WHERE email='$email'";//query to check if email exits

        $result = mysqli_query($link,$sql);

        if(mysqli_num_rows($result)>0){ //

            $emai_err = "Email already exist";

        }

        else{ // if does not exit 

            if(strlen(trim($_POST["password"]))<6){ //checking wheatrher password is 

                $password_err = "Password must have atleast 6 charecters.";

            }

            else{

                $password = $_POST["password"];

            }

            

            $con_pass = $_POST["con_pass"];

            if($password != $con_pass){ // checking password matches or not

                $con_pass_err = "Password did not match";

            }

       

    

            if(empty($emai_err) && empty($password_err) && empty($con_pass_err))

            {

                $sql = "INSERT INTO user(name,email,password) VALUES(?,?,?)";

                if($stmt = mysqli_prepare($link, $sql)){

            // Bind variables to the prepared statement as parameters

                    mysqli_stmt_bind_param($stmt, "sss", $param_username,$param_email, $param_password);

            

            // Set parameters

                    $param_username = $name;

                    $param_email = $email;

                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            

            // Attempt to execute the prepared statement

                    if(mysqli_stmt_execute($stmt)){

                    // Redirect to login page

                        header("location: index.html");

                    }

                    else{

                        echo "Something went wrong. Please try again later.";

                         }   



                } 

            }       

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
    <style>
        body{
            background-color:  #ffd9b3;
        }
        label
    {
      width:100px;
      display:inline-block;
      color:maroon;
    }
        h1{
            color: green;
            background-color:  #ccffb3;
        }
    div{
      text-align: center;
  }
      </style>

</head>

<body>

    <h1 style = "text-align:center"><u>SIGNUP</u></h1>

   

    <form method="POST">

    <div>

    <label >Name:</label>

    <input type="text" name="name" required>

    <br><br>

    <label >email</label>

    <input type="email" name="email" id="" required>

    <span><?php echo $emai_err; ?></span>

    <br><br>

    <label >Password</label>

    <input type="password" name="password" id="" required>

    <span><?php echo $password_err; ?></span>

    <br><br>

    <label for="">Confirm Password</label>

    <input type="password" name="con_pass" id="" required>

    <span><?php echo $con_pass_err;?></span>

    <br><br>

    <input type="submit" value="Submit">
    </div>

    </form>

</body>

</html>