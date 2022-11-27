<?php 
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" href="./style.css/register.css">

</head>
<body>
    <div class='main'>
        <h1>WELCOME TO REGISTER PAGE</h1>
        <hr>
        <form action="register.php" method="post">
            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="username">
            <input type="text" name="password" value="<?php echo $password; ?>" placeholder="password">
            <button type="submit" name="register">register</button>
            <p><a href="login.php" style="color:red">Back to Login Page !</a></p>
        </form>
    </div>
</body>
</html>

