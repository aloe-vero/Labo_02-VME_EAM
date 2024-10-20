<?php
$database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
require "../Controllers/ProduitController.php";
require "ClassView/ProduitView.php";
$produitController = new ProduitController($database);
$produitView = new ProduitView();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleCatalogueProduits.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Produits — Rich Ricasso</title>
</head>
<body>
<div class="container">
        <?php include 'partials/header.php'; ?>
        <p id="filtreTitre">Filtrer par</p>
        <div class="filtre">
          <div class="liste">
          <p>Type</p>
          <select name="types" id="type-select">
            <option value="">--Choisissez une option--</option>
            <option value="cravate">Cravates</option>
            <option value="t-shirt">T-shirts</option>
          </select>
          </div>
          <div class="liste">
          <p>Couleur</p>
          <select name="couleurs" id="color-select">
            <option value="">--Choisissez une option--</option>
            <option value="bleu">Bleu</option>
            <option value="mauve">Mauve</option>
            <option value="rose">Rose</option>
            <option value="blanc">Blanc</option>
            <option value="vert">Vert</option>
          </select>
          </div>
          <div class="liste">
          <p>Taille</p>
          <select name="tailles" id="size-select">
            <option value="">--Choisissez une option--</option>
            <option value="44">44</option>
            <option value="46">46</option>
            <option value="48">48</option>
            <option value="50">50</option>
            <option value="52">52</option>
            <option value="54">54</option>
            <option value="56">56</option>
            <option value="unique">Unique</option>
          </select>
          </div>
          <div class="liste">
          <p>Prix</p>
          <select name="prix" id="price-select">
            <option value="">--Choisissez une option--</option>
            <option value="0-50">0$-50$</option>
            <option value="50-100">50$-100$</option>
            <option value="100-150">100$-150$</option>
            <option value="150-200">150$-200$</option>
          </select>
          </div>
          
          <p>réinitialiser</p>
        </div>
        <div class="listeProduits">
          <?php
          $produits = $produitController->getAllProduits();

          $produitView->displayProduitsDetails($produits);
          ?>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
</body>
</html>