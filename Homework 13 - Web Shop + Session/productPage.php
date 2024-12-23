<?php
    if(!isset($_GET['id'])) {
        die('Product with that ID does not exist');
    }
    require_once 'modules/base.php';

    $productId = $_GET['id'];

    $fetchProduct = $base->query("SELECT * FROM products WHERE id = $productId");

    if($fetchProduct->num_rows == 0) {
        die('Product with that ID does not exist');
    }

    $product = $fetchProduct->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="d-flex flex-column min-vh-100">
    
<header class="bg-primary-subtle">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a href="index.php" class="navbar-brand">Web Shop</a>
                <button type="button" class="navbar-toggler" data-bs-toggle ="collapse" data-bs-target="#nav-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Homepage</a>
                        </li>
                    </ul>
                </div>                   
            </div>
        </nav>
    </header>
    <main class="container-fluid flex-grow-1 bg-info-subtle">
        <div class="d-flex justify-content-center align-items-center my-5">
            <div class="card p-3 w-25">
                <h1><?= $product['ime'] ?></h1>
                <p><?= $product['opis'] ?></p>
                <p><?= $product['cena'] ?></p>
            </div>
        </div>
    </main>
    <footer class="bg-primary-subtle p-3 text-center">Copyright &copy; 2024 Web Shop</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>