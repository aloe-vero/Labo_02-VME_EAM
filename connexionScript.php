<?php

$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
require "php/Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);

$courriel = $_POST['email'];
$password = $_POST['password'];



$utilisateur = $uc->getUtilisateurByCourriel($courriel);

if(password_verify($password, $utilisateur['password'])){
    echo "You are the user";
}
else{
    echo "Out";
}


