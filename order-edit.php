<?php
if (!isset($_GET["id"]) || $_GET["id"] == null) {
    header('location:order-index.php');
    exit;
}
require_once("classes/CRUD.php");

$crud = new CRUD;
$selectId = $crud->selectId('achats', $_GET["id"]);
if ($selectId) {
    extract($selectId);
} else {
    header('location:order-index.php');
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
        <h2>Modifier la commande</h2>
        <form action="order-update.php" method="post">
            <input type="hidden" name="id_achat" value="<?= $id_achat; ?>">
            <label>Nom
                <input type="text" name="date_achat" value="<?= $date_achat; ?>">
            </label>

            <input type="submit" class="btn" value="Update">
        </form>
    </div>
</body>

</html>