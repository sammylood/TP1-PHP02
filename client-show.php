<?php

if (!isset($_GET["id"]) || $_GET["id"] == null) {
    header('location:client-index.php');
    exit;
}
require_once("classes/CRUD.php");

$crud = new CRUD;
$selectId = $crud->selectId('clients', $_GET["id"]);
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
    header('location:client-index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Client</h1>
        <p><strong>Nom : </strong><?= $nom; ?></p>
        <p><strong>Addresse : </strong><?= $adresse; ?></p>
        <p><strong>Phone : </strong><?= $tel; ?></p>
        <p><strong>Zip Code : </strong><?= $code_postal; ?></p>
        <p><strong>Email : </strong><?= $courriel; ?></p>
        <a href="client-edit.php?id=<?= $id; ?>" class="btn">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <button type="submit" class="btn red">Delete</button>
        </form>
    </div>
</body>

</html>