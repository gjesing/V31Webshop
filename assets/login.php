<?php
require "connect.php";

$statement = $dbh->prepare("SELECT * FROM Users WHERE username = ? AND password = ?");
$statement->bindparam(1, $_POST['username']);
$statement->bindparam(2, $_POST['password']);
$statement->execute();

session_reset();
session_start();

if (empty($row = $statement->fetch())) {
    $_SESSION['errorMsg'] = "Forkert brugernavn eller adgangskode";
    header("location: ../login.php");
} else {
    $_SESSION['userId'] = $row['userId'];
    $_SESSION['firstName'] = $row['firstName'];
    $_SESSION['lastName'] = $row['lastName'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['accessLevel'] = $row['accessLevel'];
    header("location: ../index.php");
}
?>