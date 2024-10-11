<?php

require_once 'php/View/ProduitView.php';
require_once 'php/Controller/ProduitController.php';
require_once 'php/View/UtilisateurView.php';
require_once 'php/Controller/UtilisateurController.php';


$database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');

$produitController = new ProduitController($database);
$produitView = new ProduitView();

$produitController->createProduit("Chemise", "img/tshirt1.webp", "Une chemise", "10", "30", "Rouge");
echo "<p>Produits</p>";
$produits = $produitController->getAllProduits();
$produitView->displayProduits($produits);

echo "<p>Utilisateurs</p>";

$utilisateurController = new UtilisateurController($database);
$utilisateurView = new UtilisateurView();

$item = [
    "id" => "12345",
    "name" => "Sweatshirt",
    "description" => "A comfortable, stylish sweatshirt perfect for casual wear.",
    "price" => 29.99,

];
$json_item = json_encode($item);

$utilisateurController ->createUtilisateur("Jame","Wilskon","1234","jamesWil@aol.com","jamie",$json_item);


$utilisateurs = $utilisateurController->getAllUtilisateurs();
$utilisateurView->displayProduits($utilisateurs);

?>




