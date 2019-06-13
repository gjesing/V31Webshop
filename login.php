<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Her kan du købe alverdens kawaii stationery til billige priser. Alle produkter er importeret direkte fra Japan.">
    <title>Webshop</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="login.php">Log ind</a></li>
                <li><a href="#">Opret bruger</a></li>
            </ul>
        </nav>
        <a href="Index.php" class="logo">
            <img src="img/logo.png" alt="Logo">
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
        <h2>Log ind</h2>
        <form action="assets/login.php" method="post" class="login">
            <label for="username" <?php echo (isset($_SESSION['username'])) ? 'class="wrongInput"' : '' ; ?>>Brugernavn</label>
            <input type="text" name="username" <?php echo (isset($_SESSION['username'])) ? 'value="'.$_SESSION['username'].'" class="wrongInput"' : '' ; ?> required>
            <label for="password" <?php echo (isset($_SESSION['password'])) ? 'class="wrongInput"' : '' ; ?>>Adgangskode</label>
            <input type="password" name="password" <?php echo (isset($_SESSION['password'])) ? 'value="'.$_SESSION['password'].'" class="wrongInput"' : '' ; ?> required>
            <?php
            if (isset($_SESSION['errorMsg'])) {
                echo '<p class="errorMsg">'.$_SESSION['errorMsg'].'</p>';
                unset($_SESSION['username']);
                unset($_SESSION['password']);
                unset($_SESSION['errorMsg']);
            }
            ?>
            <input type="submit" value="Log ind">
        </form>
    </main>
</body>

</html>