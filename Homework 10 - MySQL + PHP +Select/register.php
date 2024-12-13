<?php

    if(!isset($_POST['email']) || !isset($_POST['password'])) {
        
        die ("Fields Email or Password is not forwarded or deleted!");
    }

    require_once 'base.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        echo 'Please enter your email';
    }

    elseif (empty($password)) {
        echo 'Please enter your password';
    }

    else {
        echo "Thank you for registering!";
        $base->query("INSERT INTO korisnici (email, password) VALUES ('{$email}', '{$password}')");
    }



