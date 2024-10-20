<?php

class ProduitView
{


    public function displayProduitsDetails($produits)
    {

        foreach ($produits as $produit) {
            echo "<div class='produit' onclick='location.href=\"pageProduit.php?id={$produit['id']}\"'>
                    <img src={$produit['image']} alt='polo licorne' width='250' height='280' >
                    <p class='description realistic-marker-highlight'>{$produit['nom']}</p>
                    <p class='prix'>{$produit['prix']}$</p>
                </div>";
        }

    }

    public function displayProduitsImage($produits)
    {
        foreach ($produits as $produit) {
            echo "<img src={$produit['image']} alt={$produit['nom']}  onclick='location.href=\"pageProduit.php?id={$produit['id']}\">";
        }
    }
    public function displayProduit($produits){
        foreach ($produits as $produit) {
        echo "<div class=\"imagesProduit\">
        <p><a href='home.php'>Accueil</a> / <a href='catalogueProduits.php'>Produits</a> / {$produit['nom']} </p>
    <img id=\"productImageMain\" src=\"../../img/produits/shirt1.webp\" alt=\"polo licornes\">
    <div class=\"sousImagesProduit\">
        <img src={$produit['image']} alt=\"polo licornes\" class=\"imageList\">
        <img src={$produit['image']} alt=\"polo licornes\" class=\"imageList\">
    </div>
</div>
<div class=\"description\">
    <p class=\"grandeLettre\">{$produit['nom']}</p>
    <p style='font-size: 20px  '>{$produit['prix']}$</p>
    <p id=\"prix\">{$produit['description']}</p>
    <ul class=\"petiteLettre\">
        <li>Taille: {$produit['taille']}</li>
        <li>Couleur: {$produit['couleur']}</li>
    </ul>
</div>";
    }

    }

}