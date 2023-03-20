<?php
        if(isset($_POST['submit-btn'])){
                $user_name = $_POST['username'];
                $user_email = $_POST['email'];
                $user_password = $_POST['password'];
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="showresult">
            <h2>Show data that is submited through form</h2>
            <hr>
            <h3>User Name : <?php if(isset( $user_name)){
                echo  $user_name;
            }?></h3>
            <h3> Email : <?php if(isset(  $user_email)){
                echo   $user_email;
            }?></h3>
            <h3> Password : <?php if(isset($user_password )){
                echo password_hash($user_password, 
                PASSWORD_DEFAULT);
                }?></h3>
            
        </div>
</body>
</html>