<?php
require "connect.php";

$statement = $dbh->prepare("SELECT products.productId, products.name, products.description, products.image, products.price, products.userId, products.creationTime, users.firstName, users.lastName, productCategories.name AS categoryName FROM products JOIN Users ON Products.userId=Users.userId JOIN ProductCategories ON Products.categoryId=ProductCategories.categoryId ORDER BY products.creationTime");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <article>
        <img src="img/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
        <h2><?php echo $row['name']; ?></h2>
        <p>Tilføjet <?php echo date('d-m-Y', strtotime($row['creationTime'])) . " af " . $row['firstName'] . " " . $row['lastName']; ?></p>
        <p><?php echo $row['description']; ?></p>
        <p><a href="#"><?php echo $row['categoryName']; ?></a></p>
        <h3><?php echo $row['price']; ?> kr.</h3>
        <button class="addToCart">Læg i kurv</button>
        <?php
        if ((isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] == 3) || (isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] == 2 && $row['userId'] == $_SESSION['userId'])) {
            ?>
            <form action="assets/deleteProduct.php" method="post" class="delete">
                <input type="hidden" name="productId" value="<?php echo $row['productId']; ?>">
                <button>
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        <?php
    }
    ?>
    </article>
<?php
}

$dbh = null;
?>