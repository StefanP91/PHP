<?php

    

    $checkInput = $_POST['name'];

    if ($checkInput == false) {
        die("Please enter a name");
    }

    $input = strtolower($_POST['name']);
    $inputLength = strlen($input);

    $personsArray = [
        "stefan",
        "tomo",
        "marko",
    ];

    $personCheck = in_array($input, $personsArray);

    if ($inputLength < 3) {
        die("Name must be at least 3 characters");
    }

    else if ($personCheck) {
        echo  $input . " is in the users list";
    }

    else {
        echo "The user is not in uses list";
    }
    