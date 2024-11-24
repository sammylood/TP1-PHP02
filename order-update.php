<?php
// if($_SERVER['REQUEST_METHOD' != "POST"]){ // pour savoir quelle methode est utilisée pour entrer sur la page
// header('location:order-index.php');
// exit;
// }

// // print_r($_POST);


// foreach($_POST as $key=>$value){
//     $$key = $value;
//     // echo $value;
// }
// print_r($_POST);
// // die();
// require_once('db/connex.php');

// $sql = "UPDATE clients SET  nom = ?, adresse = ?, tel = ?, code_postal = ?, courriel = ? WHERE id = ?";
// $stmt = $pdo->prepare($sql);
// if ($stmt-> execute(array($nom, $adresse, $tel, $code_postal, $courriel, $id))){
//     echo "success";
//     // header("location:order-index.php");
// }else{
//     print_r($stmt->errorInfo());
// }




if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header('location:order-index.php');
}

require_once('classes/CRUD.php');
print_r($_POST);

$achat = [];
foreach ($post as $key => $value) {
    if ($key == "id_voiture" || $key == "id_succursale") {
        // echo "<br/>" . $key .":". $value;
        $achat[$key] = $value;
    }
}


require_once('db/connex.php');
$id =  $_POST;

// print_r($id); //array ([id]=>57)
// echo $id["id"]; //57


$crud = new CRUD;

$update = $crud->update("achats", $id, "id");


header('location:order-index.php');
