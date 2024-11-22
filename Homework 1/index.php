<?php 

    $title = "Postani Programer";

    $navArray = ["Glavna", "O nama", "Kontakt"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <nav>
        <a href="<?= $navArray[0] ?>"><?= $navArray[0] ?></a>
        <a href="<?= $navArray[1] ?>"><?= $navArray[1] ?></a>
        <a href="<?= $navArray[2] ?>"><?= $navArray[2] ?></a>
    </nav>
</body>
</html>