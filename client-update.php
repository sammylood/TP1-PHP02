<?php
require_once('classes/CRUD.php');

$crud = new CRUD;
$update = $crud->update('client', $_POST);

// print_r($update);
if($update){
    // echo "ok";
    header("location:client-index.php");
}else{
    echo "error";
}

?>