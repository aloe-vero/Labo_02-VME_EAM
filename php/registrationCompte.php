<?php
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
$prenom = $_POST['prenom'];
$nom = $_POST['nomDeFamille'];
$email = $_POST['email'];
$password = $_POST['mdp'];


require "Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);


if (empty($prenom) || empty($nom) || empty($email)|| empty($password)) {
    echo "Tous les champs sont obligatoires.";
    exit();
}




if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse e-mail n'est pas valide.";
    exit();
}else if(count($uc->getUtilisateurByCourriel($email)) > 0){
    echo"Address courriel existant";
}

else {

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $uc ->createUtilisateur($nom, $prenom, $hash, $email);
    header("Location: Views/connexion.php");
}
