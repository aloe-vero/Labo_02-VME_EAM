<?php
session_start();
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
$prenom = $_POST['prenom'];
$nom = $_POST['nomDeFamille'];
$email = $_POST['email'];
$password = $_POST['mdp'];


require "Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);
$errors = [];


if(empty($prenom)){
    $errors['prenom'] = "Le prénom est obligatoire.";
}
if(empty($nom)){
    $errors['nom'] = "Le nom de famille est obligatoire.";
}
if(empty($email)){
    $errors['email'] = "L'adresse courriel est obligatoire.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "L'adresse courriel n'est pas valide.";
} else if (count($uc->getUtilisateurByCourriel($email)) > 0){
    $errors['email'] = "L'adresse courriel existe déjà";
}
if(empty($password)){
    $errors['mdp'] = "Le mot de passe est obligatoire.";
}


if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header("Location: Views/inscription.php");
    exit();
}

//Si pas d'erreur on créer l'utilisateur
$hash = password_hash($password, PASSWORD_DEFAULT);
$uc ->createUtilisateur($nom, $prenom, $hash, $email);
header("Location: Views/connexion.php");
exit();