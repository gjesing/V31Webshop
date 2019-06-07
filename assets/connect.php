<?php
    $host = "localhost";
    $dbname = "V31Webshop";
    $user = "root";
    $pass = "";
     
    try {
        // MySQL database
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch (PDOException $ex) {
        echo "Fejl: " . $ex;
    }
?>