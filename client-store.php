<?php
require_once('classes/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert("clients", $_POST);

header("location:client-show.php?id=$insert");

// print_r($insert);

?>
