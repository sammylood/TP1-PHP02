<?php

if (!isset($_GET["id_achat"]) || $_GET["id_achat"] == null) {
    header('location:order-index.php');
    exit;
}
require_once("classes/CRUD.php");

$crud = new CRUD;
$selectId = $crud->selectId('achats', $_GET["id_achat"]);
if ($selectId) {
    //   foreach($selectId as $key=>$value){
    //     $$key = $value;
    //   }
    extract($selectId);

    // $city = $crud->selectId("city", $city_id);
    // print_r($city);
    // die();
    // $cityName = $city['city'];
} else {
    header('location:order-index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All orders</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Order</h1>
        <p><strong>Order ID : </strong><?= $id_achat; ?></p>
        <a href="order-edit.php?id=<?= $id_achat; ?>" class="btn">Edit</a>

    </div>
</body>

</html>