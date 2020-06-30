<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user list</title>
</head>
<body>
<h1><center><u>User List</u></center></h1>

    
</body>
</html>
<?php
include("connect.php");

$get_user = "select * from user";
    $run_user = mysqli_query($link,$get_user);

    while ($row_user = mysqli_fetch_array($run_user)){

        $user_id = $row_user['user_id'];
        $name = $row_user['name'];

        echo"
        

            <div class = 'row'>
                <div class = 'col-md-3'>
                </div>
                    <div class = 'col-md-6'>
                        <div class = 'row' >
                            <div class = 'col-md-4'>
                                
                            </div><br><br>
                                <div class = 'col-md-6'>
                                    <a style = 'text-decoration:none;cursor:pointer;color:#3897f0;
                                    ' href = '#'>
                                    <strong><h2>$name</h2></strong>
                                    </a>
                                </div>
                                <div class = 'col-md-3'>
                                <a href = 'remove_user.php?user_id=$user_id' style = 'float:right;'>
                                    <button class = 'btn btn-danger' name = 'remove_user'>Remove</button></a>

                                </div>
                            </div>
                        </div>
                        <div class = 'col-md-4'>
                        </div>
                    </div><br>
        ";
    }
    include("remove_user.php");
    


?>