<?php       

if(!isset($_POST['search']) || empty($_POST['search'])){
    die('You must enter a search term');
}

require_once "modules/base.php";

$search = $_POST['search'];

$fetchAllProducts = $base->query("SELECT * FROM products WHERE ime LIKE '%$search%' OR 
opis LIKE '%$search%' OR cena LIKE '%$search%'");


$products = $fetchAllProducts->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

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
                        <li class="nav-item">
                            <a href="login.php" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="register.php" class="nav-link">Register</a>
                        </li>
                    </ul>
                </div>                   
            </div>
        </nav>
    </header>
    <main class="container-fluid flex-grow-1 text-center text-success bg-info-subtle">

    <div class="d-flex justify-content-between mb-3 my-3">
            <button class="btn btn-success" type="button">
                <a href="addProduct.php" class="text-white text-decoration-none">Add product</a>
            </button>
            <form action="searchProducts.php" method="post" class="d-flex gap-3">
                <input class="form-control" type="text" name="search" placeholder="Search products">
                <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>

        <h1 class="mb-3">Products</h1>
        <div class="d-flex gap-3 flex-wrap">
            <?php foreach($products as $product): ?>
                <div class="card p-3 w-25" >
                    <h2><?= $product['ime'] ?></h2>
                    <p><?= $product['opis'] ?></p>
                    <p><?= $product['cena'] ?></p>

                    <a href="productPage.php?id=<?= $product['id'] ?>">View product</a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer class="bg-primary-subtle p-3 text-center">Copyright &copy; 2024 Web Shop</footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>