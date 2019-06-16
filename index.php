<?php
$title = "Forside";
include "header.php";
?>
<section>
    <h1>Velkommen <?php echo (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) ? $_SESSION['firstName'] : "til Kawaii Stationery"; ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit laborum sunt non porro deserunt, modi molestiae omnis iste eligendi, odit, explicabo unde rerum pariatur maiores eius amet et laudantium commodi!</p>
</section>
<section class="products">
    <h1>Nye produkter</h1>
    <?php require "assets/getNewProducts.php" ?>
</section>
<?php include "footer.php"; ?>