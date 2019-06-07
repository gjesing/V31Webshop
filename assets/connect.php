<?php
    $host = "localhost";
    $dbname = "V31Webshop";
    $user = "root";
    $pass = "";
     
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo "Fejl: " . $ex;
    }
?>