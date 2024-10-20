<?php
require_once "php/Database.php";
require "php/Controllers/ProduitController.php";
require "php/Views/ClassView/ProduitView.php";
$db = Database::getInstance();
$conn = $db->getConnection();
$produitController = new ProduitController($conn);
$produitView = new ProduitView();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $produits = $produitController->getProduitById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylePageProduit.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="../../js/script.js"></script>
    <title>Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php require 'php/Views/partials/header.php'; ?>
        <div class="containerProduit">
            <?php
            $produitView->displayProduit($produits)
            ?>
        </div>
        <?php require 'php/Views/partials/footer.php'; ?>
    </div>
</body>
</html>