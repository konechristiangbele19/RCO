<?php

function cnx()
{
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "db_rco_project";

//mysqli_connect($host, $user, $password, $database);

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}
