<?php
session_start();
require_once "../Database.php";
require "../Controllers/UtilisateurController.php";
$db = Database::getInstance();
$conn = $db->getConnection();
$uc = new UtilisateurController($conn);
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["mdp"];

    if (empty($email)) {
        $errors['email'] = "L'adresse courriel est obligatoire.";
    } else {
        $utilisateur = $uc->getUtilisateurByCourriel($email);
        if (!$utilisateur) {
            $errors['email'] = "Vous n'avez pas de compte à cette adresse courriel.";
        }
    }

    // Vérification du mot de passe
    if (empty($password)) {
        $errors['mdp'] = "Le mot de passe est obligatoire.";
    } elseif (isset($utilisateur) && !password_verify($password, $utilisateur['password'])) {
        $errors['mdp'] = "Le mot de passe est incorrect.";
    }

    // Si des erreurs existent
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        header("Location: /Labo_02-VME_EAM_WEB/connexion");
        exit();
    }

    // Si pas d'erreurs, connexion
    if ($utilisateur) {
        header('Location: /Labo_02-VME_EAM_WEB/utilisateur?id=' . $utilisateur['id']);
        $_SESSION['auth'] = true;
        exit();
    }
}
