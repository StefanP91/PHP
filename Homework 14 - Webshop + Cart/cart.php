<?php
    

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    require_once 'modules/base.php';
    $userId = $_SESSION['userId'];
    $userId = $base->real_escape_string($userId);

    $totalPriceFromDB = $base->query("SELECT SUM(cena) FROM orders WHERE id_korisnika = '$userId'");
    $totalPrice = $totalPriceFromDB->fetch_assoc()['SUM(cena)'];


    $result = $base->query("SELECT * FROM orders WHERE id_korisnika = '$userId'");
    $orders = $result->fetch_all(MYSQLI_ASSOC);

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>
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
    
    <main class="container-fluid flex-grow-1 bg-info-subtle d-flex justify-content-center">
        <div class="bg-white py-5 px-3 h-auto my-auto rounded">
              <?php if($result->num_rows == 0): ?>
                <p class="text-center fs-4 fw-bold">Cart is empty</p>
              <?php else: ?>
                <p class="text-center fs-4 fw-bold">You have ordered:</p>
                <ul class="list-group">
                    <?php foreach($orders as $order): ?>
                        <li class="list-group-item">
                            <p>Product: <?= $order['ime'] ?></p>
                            <p>Quantity: <?= $order['kolicina'] ?></p>
                            <p>Price: <?= $order['cena'] ?></p>
                            <a href="modules/removeFromCart.php?id=<?= $order['id'] ?>" class="btn btn-outline-danger">Remove</a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="d-flex gap-4 mt-3 align-items-center">
                    <p class="fw-bold mb-0">Total price: <?= $totalPrice ?></p>
                    <button class="btn btn-primary">Checkout</button>
                </div>
              <?php endif; ?>           
        </div>
    </main>

    <footer class="bg-primary-subtle p-3 text-center">Copyright &copy; 2024 Web Shop</footer>        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </html>
