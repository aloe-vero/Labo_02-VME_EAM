<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleIndex.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php include 'partials/header.php'; ?>
        <div class="introduction">
            <img src="../../img/web/rich.png" alt="Rich Ricasso" width="300" height="300">
            <div class="window">
                <p>I'm baby ascot austin hashtag, kombucha literally street art listicle williamsburg asymmetrical hoodie bicycle rights 90's. Ennui kale chips keytar bodega boys celiac. Crucifix distillery pug next level ennui bicycle rights church-key actually kombucha normcore shoreditch. Ethical banjo master cleanse ramps, fanny pack glossier synth ugh austin distillery lumbersexual neutral milk hotel tbh.</p>
                <p>Typewriter brunch flannel copper mug, viral crucifix yr +1 gluten-free pug ethical lomo williamsburg. Quinoa coloring book DSA, big mood vape polaroid readymade. Migas jean shorts la croix, af chartreuse farm-to-table wolf squid tilde direct trade aesthetic. Retro PBR&B tumblr palo santo twee succulents fixie shoreditch chicharrones pabst.</p>
            </div>
        </div>
        <div class="carrousel">
            <?php
            $database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
            require "../Controllers/ProduitController.php";
            require "ClassView/ProduitView.php";
            $produitController = new ProduitController($database);
            $produitView = new ProduitView();
            $produits = $produitController->getAllProduits();
            $produitView ->displayProduitsImage($produits);

            ?>

        </div>
        <div class="summerCollection">
            <p>Lookbook Été 2024</p>
            <div class="piecesPhares">
                <?php
                $produits = $produitController->getAllProduits();
                $produitView ->displayProduitsImage($produits);

                ?>
            </div>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
</body>
</html>


