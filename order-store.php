<?php
require_once('classes/CRUD.php');

$crud = new CRUD;
$post = $_POST;
print_r($post);
$insert = $crud->insert("achats", $_POST);

// $insertClient = $crud->insert("clients", $_POST);
// $insertLivre = $crud->insert("livres", $_POST);



header("location:order-show.php?id=$insert");

// print_r($insert);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Test
</body>

</html>