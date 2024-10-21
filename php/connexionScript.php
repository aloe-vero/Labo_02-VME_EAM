<?php
session_start();
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
$email = $_POST['email'];
$password = $_POST['mdp'];

require "Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);
$errors = [];

if(empty($email)){
    $errors['email'] = "L'adresse courriel est obligatoire.";
}
else {
    $utilisateur = $uc->getUtilisateurByCourriel($email);
    if (!$utilisateur) { 
        $errors['email'] = "Vous n'avez pas de compte à cette adresse courriel.";
    }
}

if (empty($password)) {
    $errors['mdp'] = "Le mot de passe est obligatoire.";
} elseif (isset($utilisateur) && !password_verify($password, $utilisateur['password'])) {
    $errors['mdp'] = "Le mot de passe est incorrect.";
}

if (empty($errors)) {
    if ($utilisateur) {
        header('Location: /Labo_02-VME_EAM_WEB/utilisateur?id='.$utilisateur['id']);}
        exit();
    } else {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header("Location: /Labo_02-VME_EAM_WEB/connexion");
    exit();
}