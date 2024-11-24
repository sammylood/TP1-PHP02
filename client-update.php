<?php
if($_SERVER['REQUEST_METHOD' != "POST"]){ // pour savoir quelle methode est utilisée pour entrer sur la page
header('location:client-index.php');
exit;
}

// print_r($_POST);
// die();

foreach($_POST as $key=>$value){
    $$key = $value;
}

require_once('db/connex.php');

$sql = "UPDATE clients SET  nom = ?, adresse = ?, tel = ?, code_postal = ?, courriel = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
if ($stmt-> execute(array($nom, $adresse, $tel, $code_postal, $courriel, $id))){
    echo "success";
    header("location:client-index.php");
}else{
    print_r($stmt->errorInfo());
}





if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header('location:order-index.php');
}
require_once("classes/CRUD.php");

foreach ($_POST as $key => $value) {
    $$key = $value;
}
echo $key. ":";
echo $value;
$crud = new CRUD;
// delete($table, $value, $field = "id")
$deleteId = $crud->delete('clients', 'POST' , "POST");
if ($selectId) {
    extract($selectId);
    $city = $crud->selectId("city", $city_id);
    // print_r($city);
    // die();
    $cityName = $city['city'];
} else {
    header('location:client-index.php');
}





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

$update = $crud->update("clients", $id, "id");


header('location:client-index.php');




?>