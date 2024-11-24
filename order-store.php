<?php
require_once('classes/CRUD.php');

$crud = new CRUD;
$post = $_POST;
print_r($post);

// $postKeys = array_keys($post);
// $postValues = array_values($post);
// print_r($postKeys);


// $client = $post["nom"];
// $achat = $post["id_voiture","id_succursale","id_client"];


// $allowed = 
// $result = [];
// foreach ($post as $key => $value) {
//     if (in_array($key, $allowed)) {
//         $result[$key] = $value;
//     }
// }




$achat = [];
foreach ($post as $key => $value) {
    if ($key == "id_voiture" || $key == "id_client" || $key == "id_succursale") {
        // echo "<br/>" . $key .":". $value;
        $achat[$key] = $value;
    }
}
print_r($achat);






$client = [];
foreach ($post as $key => $value) {
    if ($key == "nom" || $key == "adresse" || $key == "tel" || $key == "code_postal" || $key == "courriel") {
        // echo "<br/>" . $key .":". $value;
        $client[$key] = $value;
    }
}
print_r($client);

// foreach ($client as $key) {
//     unset($post[$keys]);
// }
// print_r($client);





$insert = $crud->insert("achats", $achat);
$insertClient = $crud->insert("clients", $client);






// $insert = $instertAchat."&id=".$instertClient;

// $insertClient = $crud->insert("clients", $_POST);
// $insertLivre = $crud->insert("livres", $_POST);

print_r($insert);

header("location:order-show.php?id=$insert&id=$insertClient");

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