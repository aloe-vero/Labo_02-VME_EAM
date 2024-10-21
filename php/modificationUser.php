<?php
session_start();
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');

$prenom = $_POST['prenom'] ?? '';
$nom = $_POST['nomDeFamille'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['mdp'] ?? '';
$id = $_SESSION['id'];

require "Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);
$errors = [];
$messageModif = "Modification réussie !";

if(empty($prenom)){
    $errors['prenom'] = "Le prénom est obligatoire.";
}
if(empty($nom)){
    $errors['nomDeFamille'] = "Le nom de famille est obligatoire.";
}
if(empty($email)){
    $errors['email'] = "L'adresse courriel est obligatoire.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "L'adresse courriel n'est pas valide.";
}else {
    $user = $uc->getUtilisateurById($id);
    if ($user['courriel'] !== $email) {
        if (count($uc->getUtilisateurByCourriel($email)) > 0) {
            $errors['email'] = "L'adresse courriel existe déjà pour un autre utilisateur.";
        }
    }
}
if(empty($password)){
    $errors['mdp'] = "Le mot de passe est obligatoire.";
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['post_data'] = $_POST;
    header('Location: /Labo_02-VME_EAM_WEB/utilisateur?id='.$id);
    exit();
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$uc ->updateUtilisateur($id, $nom, $prenom, $hash, $email);

unset($_SESSION['post_data']);
$_SESSION['modificationConf'] = $messageModif;
header('Location: /Labo_02-VME_EAM_WEB/utilisateur?id='.$id);
exit();
