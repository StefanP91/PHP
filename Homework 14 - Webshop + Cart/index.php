<?php

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    require_once 'modules/base.php';
    
    $fetchAllProducts = $base->query('SELECT * FROM products');

    $products = $fetchAllProducts->fetch_all(MYSQLI_ASSOC); 

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
                <a href="index.php" class="navbar-brand">Web Shop</a>
                <button type="button" class="navbar-toggler" data-bs-toggle ="collapse" data-bs-target="#nav-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Homepage</a>
                        </li>
                        <li class="nav-item d-flex">
                            <?php if(isset($_SESSION['login'])): ?>
                                <a href="modules/logout.php" class="nav-link">Logout</a>
                                <a href="cart.php" class="nav-link">Cart</a>
                            <?php else: ?>
                                <a href="login.php" class="nav-link">Login</a>
                            <?php endif; ?>
                        </li>
                        <li class="nav-item">
                        <?php if(isset($_SESSION['login'])): ?>
                                <!-- <a href="modules/logout.php" class="nav-link">Logout</a> -->
                            <?php else: ?>
                                <a href="register.php" class="nav-link">Register</a>
                            <?php endif; ?>
                        </li>
                        
                    </ul>
                </div>                   
            </div>
        </nav>
    </header>

    <main class="container-fluid flex-grow-1 bg-info-subtle pb-5">

        <div class="d-flex justify-content-between mb-3 my-3">
            <button class="btn btn-success" type="button">
                <a href="addProduct.php" class="text-white text-decoration-none">Add product</a>
            </button>
            <form action="searchProducts.php" method="post" class="d-flex gap-3">
                <input class="form-control" type="text" name="search" placeholder="Search products">
                <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>
        <h1 class="mb-3 text-center text-success">Products</h1>
        <div class="d-flex gap-3 flex-wrap justify-content-center">
            <?php foreach($products as $product): ?>
                <div class="card p-3 w-25" >
                    <h2><?= $product['ime'] ?></h2>
                    <p><?= $product['opis'] ?></p>
                    <p><?= $product['cena'] ?></p>

                    <?php if($product['kolicina'] > 0): ?>
                    <p class="text-success">In stock</p>
                    <a class="btn btn-outline-success" href="productPage.php?id=<?= $product['id'] ?>">View product</a>
                    <?php else: ?>
                    <p class="text-danger">Out of stock</p>
                    <?php endif; ?>

                    
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer class="bg-primary-subtle p-3 text-center">Copyright &copy; 2024 Web Shop</footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>