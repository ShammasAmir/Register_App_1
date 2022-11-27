<?php  
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="./style.css/register.css">

</head>
<body>
    <div class='main'>

        <h1>WELCOME TO MY BEAUTIFUL APP !!</h1>
        <hr>

        <div>
            <?php if (isset($_GET['logout1'])) :
                session_destroy();
                unset($_SESSION['username']);
            ?>
                <p>You registered successfully !</p>
                <p><a href="login.php" style="color:red">Login Now !</a></p>

            <?php elseif (isset($_GET['logout2'])) :
                session_destroy();
                unset($_SESSION['username']);
            ?>
                <p>You logged out !</p>
                <p><a href="login.php" style="color:red">Login Now !</a></p>

            <?php  elseif (!isset($_SESSION['username'])) : ?>
                <p>You are not logged in !</p>
                <p><a href="login.php" style="color:red">Login Now !</a></p>
            
            <?php  elseif (isset($_SESSION['username'])) : ?>
    	        <p>Hello <?php echo $_SESSION['username']; ?> !</p>
                <p>You logged in successfully !</p>
                <p>Active Account : <?php echo $_SESSION['username']; ?> !</p>
                <p><a href="page1.php" style="color:green">Go to page 1 !</a></p>
                <p> <a href="index.php?logout2" style="color:red">logout</a> </p>
            
            <?php endif ?>
            
        </div>
    </div>
</body>
</html>