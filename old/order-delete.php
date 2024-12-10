<?php




if($_SERVER['REQUEST_METHOD'] != "POST"){
    header('location:order-index.php');
}

require_once('classes/CRUD.php');    



    require_once('db/connex.php');
    $id =  $_POST;


    $crud = new CRUD;


    $deleteID = $crud->delete("achats", $id["id"], "id");
    header('location:order-index.php');
   
