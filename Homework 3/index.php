<?php 
    echo "DOMACI 1 <br>"; 
    
    // Podatci za proveru
    $ime = "administrator";
    $lozinka = "mojaSifraJeSigurna";

    // Unos podataka
    $inputUserName = "administrator";
    $inputPassword = "mojaSifraJeSigurna";    
    
    if(strtolower($inputUserName) == $ime && $lozinka) {
        echo "Dobrodosao administratore";
    }

    else{
        echo "Niste uneli tocne podatke za administratora";
    }


    // DOMACI 2

    echo "<br> <br> DOMACI 2 <br>";

    $sati = 5;

    if($sati >= 5 && $sati < 12) {
        echo "Jutro";
    }

    else if($sati >= 12 && $sati < 20) {
        echo "Podne";
    }

    else {
        echo "Noc";
    }


?>