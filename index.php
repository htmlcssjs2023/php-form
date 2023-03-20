<?php
    // require 'contact.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="contact.php" method="post">
        <div class="form">
            <label for="username">User Name</label><br>
            <input type="text" id="username" name="username" /><br><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" /><br><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" /><br><br>
        </div>
        <button type="submit" name="submit-btn">Submit</button>
    </form> <br><br>
  
</body>
</html>