<?php
session_start();

$valid_username = 'yuvasri';
$valid_password = 'yuva272';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === $valid_username && $password === $valid_password) {
        
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>
