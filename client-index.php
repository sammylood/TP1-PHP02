<?php
require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('clients', 'nom', 'DESC');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Client</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Code Postal</th>
                <th>courriel</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($select as $row) {
            ?>
                <tr>
                    <td><a href="client-show.php?id=<?= $row['id']; ?>"><?= $row['nom'] ?></a></td>
                    <td><?= $row['addresse'] ?></td>
                    <td><?= $row['tel'] ?></td>
                    <td><?= $row['code_postal'] ?></td>
                    <td><?= $row['courriel'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="client-create.php" class="btn">Nouveau Client</a>
</body>

</html>