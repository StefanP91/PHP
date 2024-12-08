<?php 
    $links = [
        "Glavna" => [
            "title" => "Glavna",
            "link" => "index.php"
        ],

        "O nama" => [
            "title" => "O nama",
            "link" => "about.php"
        ],

        "Kontakt" => [
            "title" => "Kontakt",
            "link" => "contact.php"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glavna</title>
</head>
<body>
    <nav>
        <?php foreach($links as $link): ?>
            <a href="<?= $link["link"] ?>"><?= $link["title"] ?></a>
        <?php endforeach; ?>
    </nav>
    
</body>
</html>