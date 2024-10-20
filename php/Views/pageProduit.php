<?php
$database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
require "../Controllers/ProduitController.php";
require "ClassView/ProduitView.php";
$produitController = new ProduitController($database);
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
    <link rel="stylesheet" href="../../css/stylePageProduit.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="../../js/script.js"></script>
    <title><?php echo $produits[0]["description"]; ?> — Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php include 'partials/header.php'; ?>
        <div class="containerProduit">
            <?php
            $produitView->displayProduit($produits)
            ?>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
</body>
</html>