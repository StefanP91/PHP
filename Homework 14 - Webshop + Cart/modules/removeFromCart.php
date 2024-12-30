<?php

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    
    if(!isset($_GET['id'])) {
        die('Product with that ID does not exist');
    }
    require_once 'base.php';

    $productId = $_GET['id'];
    $productId = $base->real_escape_string($productId);

    $base->query("DELETE FROM orders WHERE id = '$productId' AND id_korisnika = '".$_SESSION['userId']."'");

    header('Location: ../cart.php');
    
