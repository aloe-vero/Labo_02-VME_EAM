<?php

class ProduitView
{


    public function displayProduitsDetails($produits)
    {

        foreach ($produits as $produit) {
            echo "<div class='produit'>
                    <img src={$produit['image']} alt='polo licorne' width='250' height='280' >
                    <p class='description realistic-marker-highlight'>{$produit['description']}</p>
                    <p class='prix'>{$produit['prix']}</p>
                </div>";
        }

    }

    public function displayProduitsImage($produits)
    {
        foreach ($produits as $produit) {
            echo "<img src={$produit['image']} alt={$produit['description']} >";
        }
    }
    public function displayProduit($produits){
        foreach ($produits as $produit) {
        echo "<div class='produit'><img src={$produit['image']} ><p>{$produit['description']}</p><p>{$produit['taille']}</p><p>{$produit['type']}</p><p>{$produit['prix']}</p><p>{$produit['couleur']}</p></div>";
    }

    }

}