<?php

    if (!isset($_GET['name']) || empty($_GET['name'])) {
        die('Name is required');
    }

    if (!isset($_GET['description']) || empty($_GET['description'])) {
        die('Description is required');
    }

    if (!isset($_GET['price']) || empty($_GET['price'])) {
        die('Price is required');
    }

    if (!isset($_GET['quantity']) || empty($_GET['quantity'])) {
        die('Quantity is required');
    }

    require_once 'base.php';

    $name = $_GET['name'];
    $description = $_GET['description'];
    $price = $_GET['price'];
    $quantity = $_GET['quantity'];

    $checkProduct = $base->query("SELECT * FROM products WHERE ime = '$name'");

    if ($checkProduct->num_rows > 0) {
        die('Product already exists');
    }

    $insertProduct = $base->query("INSERT INTO products (ime, opis, cena, kolicina) 
    VALUES ('$name', '$description', '$price', '$quantity')");

    $successMessage =  "Product added successfully";

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="d-flex flex-column min-vh-100">
    
        <header class="bg-primary-subtle">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <a href="../index.php" class="navbar-brand">Web Shop</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle ="collapse" data-bs-target="#nav-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="nav-menu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="../index.php" class="nav-link">Homepage</a>
                            </li>
                            <li class="nav-item">
                                <a href="../login.php" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="../register.php" class="nav-link">Register</a>
                            </li>
                        </ul>
                    </div>                   
                </div>
            </nav>
        </header>
    
        <main class="container-fluid flex-grow-1 text-center text-success bg-info-subtle">
            <h1 class="my-5"><?= $successMessage ?></h1>
        </main>
        <footer class="bg-primary-subtle p-3 text-center">Copyright &copy; 2024 Web Shop</footer>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </html>


