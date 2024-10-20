<?php
require "php/Controllers/ProduitController.php";
require "php/Views/ClassView/ProduitView.php";
require_once "php/Database.php";
$db = Database::getInstance();
$conn = $db->getConnection();

$produitController = new ProduitController($conn);
$produitView = new ProduitView();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCatalogueProduits.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
<div class="container">
    <?php require 'php/Views/partials/header.php'; ?>
        <div class="listeProduits">
          <?php
          $produits = $produitController->getAllProduits();

          $produitView->displayProduitsDetails($produits);
          ?>
        </div>
    <?php require 'php/Views/partials/footer.php'; ?>
    </div>
</body>
</html>