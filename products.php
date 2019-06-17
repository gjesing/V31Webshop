<?php
$title = "Produkter";
include "header.php";

if (isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] > 1) {
    ?>
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
                <option value="" disabled selected>Vælg kategori</option>
                <?php require "assets/getProductCategories.php" ?>
            </select>
            <input type="submit" value="Tilføj">
        </form>
    </section>
<?php
}
?>
<section class="products">
    <h1>Alle produkter</h1>
    <?php require "assets/getProducts.php" ?>
</section>
<?php include "footer.php"; ?>