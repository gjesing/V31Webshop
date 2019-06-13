<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
    require "connect.php";
    try {
        $statement = $dbh->prepare("INSERT INTO Products (name, description, price, image, categoryId, userId) VALUES (:name, :description, :price, :image, :categoryId, :userId)");
        $statement->bindParam(':name', $_POST['name']);
        $statement->bindParam(':description', $_POST['description']);
        $statement->bindParam(':price', $_POST['price']);
        $statement->bindParam(':image', $_POST['image']);
        $statement->bindParam(':categoryId', $_POST['categoryId']);
        $statement->bindParam(':userId', $_SESSION['userId']);
        $statement->execute();
        header("location: ../products.php");
    } catch (PDOException $e) {
        echo "Fejl: $e";
    }
    
    $dbh = null;
}
else {
    header("location: ../index.php");
}
?>