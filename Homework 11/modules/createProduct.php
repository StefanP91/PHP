<?php

    if (!isset($_GET ['ime']) || empty($_GET ['ime'])) {
        die ("Product name is required");
    }

    if (!isset($_GET ['opis']) || empty($_GET ['opis'])) {
        die ("Product description is required");
    }

    if (!isset($_GET ['cena']) || empty($_GET ['cena'])) {
        die ("Product price is required");
    }

    if (!isset($_GET ['dan_nabavke']) || empty($_GET ['dan_nabavke'])) {
        die ("Date of purchase is required");
    }

    if (!isset($_GET ['kolicina']) || empty($_GET ['kolicina'])) {
        die ("Quantity is required");
    }
    
    $ime = $_GET ['ime'];
    $opis = $_GET ['opis'];
    $cena = $_GET ['cena'];
    $dan_nabavke = $_GET ['dan_nabavke'];
    $kolicina = $_GET ['kolicina'];

    require_once ("base.php");

    $sql = "INSERT INTO `proizvodi` (`ime`, `opis`, `cena`, `dan_nabavke`, `kolicina`) 
    VALUES ('{$ime}', '{$opis}', '{$cena}', '{$dan_nabavke}', '{$kolicina}');";
    $base->query ($sql);
    echo "Product created successfully";