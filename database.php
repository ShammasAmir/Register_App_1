
<?php

session_start();

$username="";
$password="";

$db = mysqli_connect('localhost', 'root', 'mysql123', 'register_db');

if (isset($_POST['register'])) {
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "INSERT INTO users_tb (username, password) VALUES ('$username', '$password')";
    mysqli_query($db, $query);

    header('location: index.php?logout1');

}

if (isset($_POST['login'])) {
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    $query = "SELECT * FROM users_tb WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('location: index.php');
    } else {
        header('location: login.php?error');
    }
    }

?>