<?php
require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('clients', 'nom', 'ASC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Client</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form action="client-store.php" method="post"><!-- action vide: travailler avec le même nom de colonne -->
            <h2>Nouveau client</h2>
            <label>Nom
                <input type="text" name="nom">
            </label>
            <label>Adresse
                <input type="text" name="adresse">
            </label>
            <label>Telephone
                <input type="number" name="tel">
            </label>
            <label>Code postal
                <input type="text" name="code_postal">
            </label>
            <label>Courriel
                <input type="text" name="courriel">
            </label>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>

</html>