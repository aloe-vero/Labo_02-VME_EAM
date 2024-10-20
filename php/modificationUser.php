<?php
session_start();
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
require "Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);
$prenom = $_POST['prenom'];
$nom = $_POST['nomDeFamille'];
$email = $_POST['email'];
$password = $_POST['mdp'];
$id = $_SESSION['id'];
echo $prenom;
echo $id;

$uc ->updateUtilisateur($id, $nom, $prenom, $password, $email);
header('Location: Views/espaceUtilisateur.php?id='.$id);
