<?php
if($_SERVER['REQUEST_METHOD' != "POST"]){ // pour savoir quelle methode est utilisée pour entrer sur la page
header('location:client-index.php');
exit;
}

print_r($_POST);
die();

foreach($_POST as $key=>$value){
    $$key = $value;
}

require_once('db/connex.php');

$sql = "UPDATE client SET  name = ?, address = ?, phone = ?, zip_code = ?, email = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
if ($stmt-> execute(array($name, $address, $phone, $zip_code, $email, $id))){
    echo "success";
    header("location:client-index.php");
}else{
    print_r($stmt->errorInfo());
}