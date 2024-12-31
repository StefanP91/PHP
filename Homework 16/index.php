<?php

    require_once 'Modeli/Zivotinja.php';
    require_once 'Modeli/VodenaZivotinja.php';
    require_once 'Modeli/KopnenaZivotinja.php';
    require_once 'Modeli/Pas.php';
    require_once 'Modeli/Riba.php';
    require_once 'Modeli/Meduza.php';
    require_once 'Modeli/Kokoska.php';

    $pas = new Pas();
    $pas-> nacinIzrazhavanja = "laje";
    $pas-> prehrane = "Hrana za pse";
    $pas-> tezina = 50;

    echo "Ovaj pas " . $pas->nacinIzrazhavanja . " i ima prehrane " . $pas->prehrane . " i tezina " . $pas->tezina; 
    echo "<br>";


    $kokoska = new Kokoska();
    $kokoska->bojaPerja = "bela";
    $kokoska->prehrane = "pcenka";
    $kokoska->tezina = 5;

    echo "Ova kokoska ima boju perja " . $kokoska->bojaPerja . " i ima prehrane " . $kokoska->prehrane . " i tezina " . $kokoska->tezina; 
    echo "<br>";


    $riba = new Riba();
    $riba->tipaKrljuske = "nema";
    $riba->tipaVode = "Slatka";
    $riba->tezina = 10;

    echo "Ova riba " . $riba->tipaKrljuske  . " krljuske "  ." i ima tipa vode " . $riba->tipaVode . " i tezina " . $riba->tezina; 
    echo "<br>";


    $meduza = new Meduza();
    $meduza->duzinaPipaka = "30cm"; 
    $meduza->tipaVode = "Solena";
    $meduza->tezina = 10; 

    echo "Ova meduza ima duzinu pipaka " . $meduza->duzinaPipaka . " i ima tipa vode " . $meduza->tipaVode . " i tezina " . $meduza->tezina; 
    echo "<br>";
