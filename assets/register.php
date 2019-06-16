<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "connect.php";

    $statement = $dbh->prepare("SELECT * FROM Users WHERE username = ?");
    $statement->bindparam(1, $_POST['username']);
    $statement->execute();

    session_start();

    if (empty($row = $statement->fetch())) {
        $statement = $dbh->prepare("INSERT INTO Users (firstName, lastName, username, password) VALUES (:firstName, :lastName, :username, :password)");
        $statement->bindParam(':firstName', $_POST['firstName']);
        $statement->bindParam(':lastName', $_POST['lastName']);
        $statement->bindParam(':username', $_POST['username']);
        $statement->bindParam(':password', $_POST['password']);
        $statement->execute();
        $statement = $dbh->prepare("SELECT * FROM Users WHERE username = ?");
        $statement->bindparam(1, $_POST['username']);
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['userId'] = $row['userId'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['accessLevel'] = $row['accessLevel'];
        }
        header("location: ../index.php");
    } else {
        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['errorMsg'] = "Dette brugernavn er ikke tilgængeligt. Vælg et andet.";
        header("location: ../register.php");
    }

    $dbh = null;
} else {
    header("location: ../index.php");
}
