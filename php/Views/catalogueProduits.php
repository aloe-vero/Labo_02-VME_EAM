<?php
session_start();
require "php/Controllers/ProduitController.php";
require "php/Views/ClassView/ProduitView.php";
require_once "php/Database.php";
$db = Database::getInstance();
$conn = $db->getConnection();
$produitController = new ProduitController($conn);
$produitView = new ProduitView();

function getSelectedValue($options,$valeur){
    if(isset($options) && $options == $valeur) echo 'selected';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['clear'])) {
        $type = "";
        $prix = "";
        $taille = "";
        $couleur = "";
    } else {
        $type = $_POST['type'];
        $prix = $_POST['prix'];
        $taille = $_POST['taille'];
        $couleur = $_POST['couleur'];
    }

    $produits = $produitController->getProduitsFiltrer($type, $prix, $taille, $couleur);
    count($produits) == 0? $message = "0 produits trouvés": $message =   count($produits)." produits trouvés";


} else {
    $produits = $produitController->getAllProduits();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCatalogueProduits.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Produits — Rich Ricasso</title>
</head>
<body>
<div class="container">
    <?php require 'php/Views/partials/header.php'; ?>
    <form method="post">
        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="">- - -</option>
            <option value="chemise" <?php getSelectedValue($type, 'chemise'); ?>>Chemises</option>
            <option value="cravate" <?php getSelectedValue($type, 'cravate'); ?>>Cravates</option>
        </select>

        <label for="prix">Prix:</label>
        <select name="prix" id="prix">
            <option value="">- - -</option>
            <option value="0-50" <?php getSelectedValue($prix, '0-50'); ?>>0-50</option>
            <option value="50-100" <?php getSelectedValue($prix, '50-100'); ?>>50-100</option>
            <option value="100-150" <?php getSelectedValue($prix, '100-150'); ?>>100-150</option>
            <option value="150-200" <?php getSelectedValue($prix, '150-200'); ?>>150-200</option>
        </select>

        <label for="taille">Taille:</label>
        <select name="taille" id="taille">
            <option value="">- - -</option>
            <option value="44" <?php getSelectedValue($taille, '44'); ?>>44</option>
            <option value="46" <?php getSelectedValue($taille, '46'); ?>>46</option>
            <option value="48" <?php getSelectedValue($taille, '48'); ?>>48</option>
            <option value="50" <?php getSelectedValue($taille, '50'); ?>>50</option>
            <option value="52" <?php getSelectedValue($taille, '52'); ?>>52</option>
            <option value="54" <?php getSelectedValue($taille, '54'); ?>>54</option>
            <option value="56" <?php getSelectedValue($taille, '56'); ?>>56</option>
        </select>

        <label for="couleur">Couleur:</label>
        <select name="couleur" id="couleur">
            <option value="">- - -</option>
            <option value="Bleu" <?php getSelectedValue($couleur, 'Bleu'); ?>>Bleu</option>
            <option value="Vert" <?php getSelectedValue($couleur, 'Vert'); ?>>Vert</option>
            <option value="Rose" <?php getSelectedValue($couleur, 'Rose'); ?>>Rose</option>
            <option value="Mauve" <?php getSelectedValue($couleur, 'Mauve'); ?>>Mauve</option>
            <option value="Blanc" <?php getSelectedValue($couleur, 'Blanc'); ?>>Blanc</option>
        </select>
        <input type="submit" name="clear" id="clear" value="Clear">
        <input type="submit" name="submit" id="submit" value="Submit" >
    </form>



    <div class="listeProduits">
          <?php
          echo $message?? "";
          $produitView->displayProduitsDetails($produits);
          ?>
        </div>

    <?php require 'php/Views/partials/footer.php'; ?>
    </div>
</body>
</html>