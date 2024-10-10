<?php

require_once 'php/View/ProduitView.php';
require_once 'php/Controller/ProduitController.php';


$database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');

$produitController = new ProduitController($database);
$produitView = new ProduitView();

$produits = $produitController->getAllProduits();
$produitView->displayProduits($produits);

$produitController->createProduit("Chemise", "dot.png", "Une chemise", "10", "30", "Rouge");


$produits = $produitController->getAllProduits();
$produitView->displayProduits($produits);
?>


<p>Test</p>