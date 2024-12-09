<?php
    $delivery = [
        "Subotica" => 220,
        "Pancevo" => 10,
        "Sarajevo" => 292,
        "Split" => 799,
        "Skopje" => 150,
    ];

    function calculateDelivery($price, $city) {
        global $delivery;

        if (!isset($delivery[$city])) {
            die ("City not found");
        }
        
        foreach ($delivery as $deliveryCity => $km) {
            if ($deliveryCity == $city) {
                if ($km <= 100){
                    $deliveryPrice = 200;
                } 
                else if ($km > 100 && $km <= 200){
                    $deliveryPrice = 350;
                } 
                else {
                    $deliveryPrice = 500;
                }
            }
        }
    
        return $price + $deliveryPrice;
        
    }


    $priceWithDelivery = calculateDelivery(2000, "Skopje");
    echo "Price with delivery: " . $priceWithDelivery . " rsd";
    