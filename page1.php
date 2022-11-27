<?php
session_start();
?>

<?php if (!isset($_SESSION['username'])) : 
    header('Location: login.php');
    exit;?>

<?php else :?>
            
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PAGE 1</title>
        <link rel="stylesheet" href="./style.css/register.css">

    </head>
    <body>
        <div class='main'>
            <h1>THIS IS PAGE 1</h1>
            <hr>
            <p>Active Account : <?php echo $_SESSION['username']; ?> !</p>
            <p> <a href="index.php?logout2" style="color:red">logout</a> </p>
        
        </div>
    </body>
    </html>

<?php endif ?>
