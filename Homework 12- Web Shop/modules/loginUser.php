<?php 

    if (!isset($_POST['email']) || empty($_POST['email'])) {
        die('Email is required');
    }

    if (!isset($_POST['password']) || empty($_POST['password'])) {
        die('Password is required');
    }

    require_once 'base.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkUser = $base->query("SELECT * FROM users WHERE email = '$email'");

    if ($checkUser->num_rows == 0) {
        die('User does not exist');
    }

    $user = $checkUser->fetch_assoc();

    if (!password_verify($password, $user['password'])) {
        die('Invalid password');
    }
    $successMessage = 'Login successful';

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