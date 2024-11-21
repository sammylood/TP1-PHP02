<?php
if (!isset($_GET["id"]) || $_GET["id"] == null) {
    header('location:client-index.php');
    exit;
}
require_once("classes/CRUD.php");

$crud = new CRUD;
$selectId = $crud->selectId('clients', $_GET["id"]);
if ($selectId) {
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
    <title>Modifier le client</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h2>Modifier le client</h2>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <label>Nom
                <input type="text" name="nom" value="<?= $nom; ?>">
            </label>
            <label>Address
                <input type="text" name="adresse" value="<?= $adresse; ?>">
            </label>
            <label>Phone
                <input type="text" name="tel" value="<?= $tel; ?>">
            </label>
            <label>Zip Code
                <input type="text" name="code_postal" value="<?= $code_postal; ?>">
            </label>
            <label>Email
                <input type="email" name="courriel" value="<?= $courriel; ?>">
            </label>
            <label>City
                <input type="city" name="city" value="<?= $cityName; ?>">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
</body>

</html>