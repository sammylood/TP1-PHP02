<?php
// try {
//     $dbhost = "localhost";
//     $dbname = "e0366635";
//     $dbuser = "e0366635";
//     $dbpass = "e0p934gTtPkF35adIDo2";
//     $dbport = 3306;
//     $pdo = new PDO("mysql:host=$dbhost; dbname=$dbname; port=$dbport; charset=utf8", $dbuser, $dbpass); //concatenation avec les double guillemets
// } catch (PDOException $e) {
//     echo "Error :" . $e->getMessage();
//     die();
// }

try{
    $dbhost = "localhost";
    $dbname = "test";
    $dbuser = "root";
    $dbpass = "";
    $dbport = 3306;
    $pdo = new PDO("mysql:host=$dbhost; dbname=$dbname; port=$dbport; charset=utf8", $dbuser, $dbpass); //concatenation avec les double guillemets
}catch (PDOException $e) {
    echo "Error :". $e->getMessage();
    die();
}
?>