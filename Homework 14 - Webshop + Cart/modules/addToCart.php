<?php

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if(!isset($_POST['id']) || empty($_POST['id'])) {
        die('Product with that ID does not exist');
    }
    if (!isset($_POST['quantity']) || empty($_POST['quantity'])) {
        die('Quantity is required');
    }


    require_once 'base.php';
    $productId = $_POST['id'];
    $quantity = $_POST['quantity'];
    $userId = $_SESSION['userId'];

    $productId = $base->real_escape_string($productId);
    $quantity = $base->real_escape_string($quantity);
    $userId = $base->real_escape_string($userId);

    $priceFromDB = $base->query("SELECT cena FROM products WHERE id = '$productId'");
    $productNameFromDB = $base->query("SELECT ime FROM products WHERE id = '$productId'");
    
    $rowFromDB = $priceFromDB->fetch_assoc();
    $rowNameFromDB = $productNameFromDB->fetch_assoc();
    
    $price = $rowFromDB['cena'] * $quantity;
    $productName = $rowNameFromDB['ime'];


    $base->query("INSERT INTO orders (id_proizvoda, id_korisnika, kolicina, cena, ime) 
                VALUES ('$productId', '$userId', '$quantity', '$price', '$productName')");

    header('Location: ../cart.php');
    exit();