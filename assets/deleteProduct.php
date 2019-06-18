<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
    require "connect.php";
    try {
        $statement = $dbh->prepare("DELETE FROM Products WHERE productId = :productId");
        $statement->bindParam(':productId', $_POST['productId']);
        $statement->execute();
        header("location: ../products.php");
    } catch (PDOException $e) {
        echo "Fejl: $e";
    }
    
    $dbh = null;
}
else {
    header("location: ../" . $_SESSION['previousPage']);
}
?>