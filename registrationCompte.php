<?php
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];


require "php/Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);


if (empty($prenom) || empty($nom) || empty($email)|| empty($password)) {
    echo "Tous les champs sont obligatoires.";
    exit(); // Met fin au script courant
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse e-mail n'est pas valide.";
    exit();
}
else {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $uc ->createUtilisateur($nom, $prenom, $hash, $email);
}

// Enregistrer les données dans une base de données MySQL

echo "<h2>Merci, $prenom $nom.</h2>";
echo "<p>Votre adresse email est : <b>$email.</b></p>";
?>