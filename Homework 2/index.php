<?php 

    $title = "Postani Programer";

    $navArray = [
        "Glavna" =>[
            "link_name" => "Glavna",
            "link_url" => "home.php"
        ],

        "O Nama" =>[
            "link_name" => "O Nama",
            "link_url" => "about_us.php"
        ],

        "Kontakt" =>[
            "link_name" => "Kontakt",
            "link_url" => "contact.php"
        ],
    ];

    $currentYear = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <nav>
        <a href="<?= $navArray["Glavna"] ["link_url"] ?>"><?= $navArray['Glavna']['link_name'] ?></a>
        <a href="<?= $navArray["O Nama"] ["link_url"] ?>"><?= $navArray['O Nama']['link_name'] ?></a>
        <a href="<?= $navArray["Kontakt"] ["link_url"] ?>"><?= $navArray['Kontakt']['link_name'] ?></a>
    </nav>

    <footer>
        <p>Copyright &copy; mojsajt <?= $currentYear ?> </p>
    </footer>
</body>
</html>