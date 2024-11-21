<?php
require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('achats', 'date_achat', 'ASC');
$selectLivre = $crud->select('livres', 'titre', 'ASC');
$selectClient = $crud->select('clients', 'nom', 'ASC');
$selectAuteur = $crud->select('auteurs', 'nom', 'ASC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle commande</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form action="order-store.php" method="POST"><!-- action vide: travailler avec le même nom de colonne -->
            <h2>Nouvelle commande</h2>
            <!-- <label>Date
                <input type="date" name="date_achat">
            </label> -->
            <!-- <label>Nom
                <input type="text" name="nom">
            </label> -->
            <label for="livres">livres</label>
            <select id="livres" name="id_livre" required>
                <?php
                foreach ($selectLivre as $rowLivre) {
                    // $id_auteur = $rowLivre['id_auteur'];
                    // $selectAuteur['$id_auteur'] = ;
                ?>
                    <option value="<?= $rowLivre['id_livre']; ?>"><?= $rowLivre['titre']; ?></option>
                <?php
                }
                ?>
            </select>
            <label for="clients">clients</label>
            <select id="client" name="id_client" required>
                <?php
                foreach ($selectClient as $rowClient) {
                    $row = $select;
                    $row['id_client'] = $rowClient['id'];
                ?>

                    <option value="<?= $row['id_client']; ?>"><?= $rowClient['nom'] ?></option>
                <?php
                }
                ?>
            </select>
            <!-- <label>Nom
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
            </label> -->

            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>

</html>