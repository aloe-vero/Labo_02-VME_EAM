<?php

class ProduitView
{


    public function displayProduits($produits)
    {

        foreach ($produits as $produit) {
            echo "<div class='carte'><img src={$produit['image']} ><p>{$produit['description']}</p></div>";
        }

    }

    public function displayProduit($produits){
        foreach ($produits as $produit) {
        echo "<div class='carte'><img src={$produit['image']} ><p>{$produit['description']}</p><p>{$produit['taille']}</p><p>{$produit['type']}</p><p>{$produit['prix']}</p><p>{$produit['couleur']}</p></div>";
    }

    }

}