
<?php
// if ($_SERVER['REQUEST_METHOD'] != "POST") {
//     header('location:order-index.php');
// }
// require_once("classes/CRUD.php");

// foreach ($_POST as $key => $value) {
//     $$key = $value;
// }
// echo $key. ":";
// echo $value;
// $crud = new CRUD;
// // delete($table, $value, $field = "id")
// $deleteId = $crud->delete('clients', 'POST' , "POST");
// if ($selectId) {
//     extract($selectId);
//     $city = $crud->selectId("city", $city_id);
//     // print_r($city);
//     // die();
//     $cityName = $city['city'];
// } else {
//     header('location:client-index.php');
// }


if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header('location:order-index.php');
}

require_once('classes/CRUD.php');
print_r($_POST);




require_once('db/connex.php');
$id =  $_POST;

// print_r($id); //array ([id]=>57)
// echo $id["id"]; //57


$crud = new CRUD;

$deleteID = $crud->delete("clients", $id["id"], "id");

header('location:client-index.php');




?>