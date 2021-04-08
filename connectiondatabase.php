<?php

function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $databasename = "databank_php";

    try {
        $conn = new PDO("mysql:host=".$servername.";dbname=".$databasename.";", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}



function alleData(){
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM characters ORDER BY name, health, attack, defense");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $conn = null;

    return $result;
}

function eenData(){
    $var = $_GET["id"];
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM characters WHERE id=?");
    $stmt->execute([$var]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;

    return $result;
}
?>