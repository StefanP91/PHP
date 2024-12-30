<?php 

    if (!isset($_POST['email']) || empty($_POST['email'])) {
        die('Email is required');
    }

    if (!isset($_POST['password']) || empty($_POST['password'])) {
        die('Password is required');
    }


    require_once 'base.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = $base->real_escape_string($email);
    $password = $base->real_escape_string($password);

    $checkUser = $base->query("SELECT * FROM users WHERE email = '$email'");

    if ($checkUser->num_rows == 0) {
        die('User does not exist');
    }

    $user = $checkUser->fetch_assoc();

    if (!password_verify($password, $user['password'])) {
        die('Invalid password');
    }

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $_SESSION['login'] = true;
    $_SESSION['userId'] = $user['id'];

    header('Location: ../index.php');

?>



