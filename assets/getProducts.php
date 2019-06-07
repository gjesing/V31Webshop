<?php
require_once "connect.php";

$statement = $dbh->prepare("SELECT * FROM products");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <article>
        <img src="img/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
        <h2><?php echo $row['name']; ?></h2>
        <p>Tilføjet <?php echo $row['creationTime']; ?> af <?php echo $row['authorId']; ?></p>
        <p><?php echo $row['description']; ?></p>
        <p><a href="#"><?php echo $row['categoryId']; ?></a></p>
        <h3><?php echo $row['price']; ?> kr.</h3>
        <button>Læg i kurv</button>
    </article>
<?php
}

$dbh = null;
?>