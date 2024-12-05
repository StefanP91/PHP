<?php

    $price = $_GET['price'];
    $choice = $_GET['choice'];
    $priceVat = isset($_GET['priceVat']);


    $food = 50;
    $pc = 350;

    $priceForFood = $food + $price;
    $priceForPC = $pc + $price;
    $priceFoodWithVat = $priceForFood + ($priceForFood * 0.1);
    $pricePCWithVat = $priceForPC + ($priceForPC * 0.1);



    if($choice == 'food' && $priceVat == true) {
        echo $priceFoodWithVat;
    }

    else if($choice == 'food'){
        echo $priceForFood;
    }

    if($choice == 'pc' && $priceVat == true) {
        echo $pricePCWithVat;
    }

    else if($choice == 'pc'){
        echo $priceForPC;
    }




