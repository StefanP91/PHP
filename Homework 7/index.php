<?php
    
    function checkVat ($price, $vat) {
       

        if (!is_numeric($price)) {
            return "Cena mora biti broj";
        }

        elseif ($price < 1) {
            echo "Cena ne moze biti manje od 1";
        }
        
        else{
            return $price + $vat;
        }

        $vat = $price * $vat / 100;
    }

    echo checkVat(100, 22);