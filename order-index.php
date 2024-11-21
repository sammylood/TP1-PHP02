<?php
require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('achats', 'date_achat', 'DESC');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Commande</h1>
    <table>
        <thead>
            <tr>
                <th>Achats</th>
                <th>Date d'achat</th>
                <!-- <th>Tel</th>
                <th>Code Postal</th>
                <th>courriel</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($select as $row) {
            ?>
                <tr>
                    <td><a href="order-show.php?id=<?= $row['id']; ?>"><?= $row['id'] ?></a></td>
                    <td><?= $row['date_achat'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="order-create.php" class="btn">Nouvelle commande</a>
</body>

</html>