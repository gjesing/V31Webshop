<?php
require "connect.php";

$statement = $dbh->prepare("SELECT products.productId, products.name, products.description, products.image, products.price, products.creationTime, authors.firstName, authors.lastName, productCategories.name AS categoryName FROM products JOIN authors ON products.authorId=authors.authorId JOIN productCategories ON products.categoryId=productCategories.categoryId ORDER BY products.creationTime");
$statement->execute();

$dbh = null;
?>