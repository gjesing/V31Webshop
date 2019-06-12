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
                <li><a href="#">Log ind</a></li>
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
        <section>
            <h1>Tilføj produkt</h1>
            <form action="assets/createProduct.php" method="post" class="addProduct">
                <label for="name">Produktnavn</label>
                <input type="text" name="name" required>
                <label for="image">Billede</label>
                <input type="text" name="image">
                <label for="description">Produktbeskrivelse</label>
                <textarea name="description" rows="7" required></textarea>
                <label for="price">Pris</label>
                <input type="number" step="0.01" name="price" required>
                <label for="categoryId">Kategori</label>
                <select name="categoryId" required>
                    <?php require "assets/getProductCategories.php" ?>
                </select>
                <input type="submit" value="Tilføj">
            </form>
        </section>
        <section>
            <h1>Nye produkter</h1>
            <?php require "assets/getProducts.php" ?>
        </section>
    </main>
</body>

</html>