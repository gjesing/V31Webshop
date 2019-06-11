<?php
require_once "connect.php";

$statement = $dbh->prepare("SELECT products.productId, products.name, products.description, products.image, products.price, products.creationTime, authors.firstName, authors.lastName, productCategories.name AS categoryName FROM products JOIN authors ON products.authorId=authors.authorId JOIN productCategories ON products.categoryId=productCategories.categoryId ORDER BY products.creationTime DESC LIMIT 4");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <article>
        <img src="img/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
        <h2><?php echo $row['name']; ?></h2>
        <p>Tilføjet <?php echo date('d-m-Y', strtotime($row['creationTime']))." af ".$row['firstName']." ".$row['lastName']; ?></p>
        <p><?php echo $row['description']; ?></p>
        <p><a href="#"><?php echo $row['categoryName']; ?></a></p>
        <h3><?php echo $row['price']; ?> kr.</h3>
        <button>Læg i kurv</button>
    </article>
<?php
}

$dbh = null;
?>