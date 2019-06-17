<?php
$title = "Forside";
include "header.php";
?>
<section>
    <h1>Velkommen <?php echo (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) ? $_SESSION['firstName'] : "til Kawaii Stationery"; ?></h1>
    <p>Her kan du købe alverdens kawaii stationery til billige priser. Alle produkter er importeret direkte fra Japan.</p>
</section>
<section class="products">
    <h1>Nye produkter</h1>
    <?php require "assets/getNewProducts.php" ?>
</section>
<?php include "footer.php"; ?>