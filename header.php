<?php
session_start();
$_SESSION['currentPage'] = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1);
if (isset($_SERVER['HTTP_REFERER'])){
    if (!isset($_SESSION['previousPage']) || substr($_SERVER['HTTP_REFERER'], strrpos($_SERVER['HTTP_REFERER'], '/') + 1) != $_SESSION['currentPage']) {
        $_SESSION['previousPage'] = substr($_SERVER['HTTP_REFERER'], strrpos($_SERVER['HTTP_REFERER'], '/') + 1);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Her kan du købe alverdens kawaii stationery til billige priser. Alle produkter er importeret direkte fra Japan.">
    <title><?php echo $title; ?> | Kawaii Stationery</title>
    <link rel="icon" type="image/png" href="img/logo2.png">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">FAQ</a></li>
                <?php
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
                    echo '<li><a href="#">Min konto</a></li>';
                    echo '<li><a href="assets/logout.php">Log ud</a></li>';
                } else {
                    echo '<li><a href="login.php">Log ind</a></li>';
                    echo '<li><a href="register.php">Opret bruger</a></li>';
                }
                ?>
            </ul>
        </nav>
        <a href="Index.php" class="logo">
            <img src="img/logo2.png" alt="Logo">
            <h1>Kawaii Stationery</h1>
        </a>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Forside</a></li>
            <li><a href="products.php">Produkter</a></li>
            <li><a href="#">Om os</a></li>
            <li><a href="#">Kontakt</a></li>
            <li><a href="#">Indkøbskurv<i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </nav>
    <main>