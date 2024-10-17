<?php

require_once __DIR__ . "/../Views/ClassView/ProduitView.php";
require_once __DIR__ . "/../Controllers/ProduitController.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .carte{
            display: flex;
            border: 1px solid black;
            width: 200px;
            height: 500px;
            flex-direction: column;
            align-items: center ;
        }
        img{
            width: 200px;
        }

        .p1{
            display: flex;
            flex-direction: row;

        }
    </style>
</head>
<body>

<p>Hello</p>
<div class = "p1">
<?php
$database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');

$produitController = new ProduitController($database);
$produitView = new ProduitView();
//$produits = $produitController->getAllProduits();
$produits = $produitController->getProduitById(17);
$produitView->displayProduit($produits);
//$produitView->displayProduits($produits);

?>

</div>


</body>
</html>