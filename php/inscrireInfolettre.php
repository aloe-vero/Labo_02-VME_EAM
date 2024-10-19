<?php
session_start();
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');

$email = $_POST['email'];

require "Controllers/AbonnementController.php";

$ac= new AbonnementController($conn);
$errors = "";
$messageConfirmation = "Merci pour votre inscription !";

if(empty($email)){
    $errors = "L'adresse courriel est obligatoire.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors = "L'adresse courriel n'est pas valide.";
} else if (count($ac->getAbonnement($email)) > 0){
    $errors = "L'adresse courriel existe déjà";
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header("Location: Views/infolettre.php");
    exit();
}


$ac ->createAbonnement($email,1);
header("Location: Views/infolettre.php");
$_SESSION['confirmation'] = $messageConfirmation;
exit();
