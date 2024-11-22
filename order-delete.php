<?php




if($_SERVER['REQUEST_METHOD'] != "POST"){
    header('location:order-index.php');
}

require_once('classes/CRUD.php');    
print_r($_POST);


    require_once('db/connex.php');
    $id =  $_POST;

    print_r($id); //array ([id]=>57)
    echo $id["id"]; //57


    $crud = new CRUD;


    $deleteID = $crud->delete("achats", $id["id"], "id");
    header('location:order-index.php');
   
