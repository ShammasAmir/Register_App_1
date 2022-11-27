<?php 
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="./style.css/register.css">

</head>
<body>
    <div class='main'>
        <h1>WELCOME TO LOGIN PAGE</h1>
        <hr>
        
        <?php if (isset($_GET['error'])) :
            session_destroy();
            unset($_SESSION['username']);
        ?>
            <p>Wrong username or password ! Try again !</p>
        <?php endif ?>

        <form action="login.php" method="post">
            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="username">
            <input type="text" name="password" value="<?php echo $password; ?>" placeholder="password">
            <button type="submit" name="login">login</button>
        </form>
        <div>
  		    Not registered yet ? <a href="register.php" style="color:red">Register Now !</a>
        </div>
    </div>
</body>
</html>