<?php

class ProduitView
{


    public function displayProduitsDetails($produits)
    {
        foreach ($produits as $produit) {
            echo "<a href='pageProduit.php?id={$produit["id"]}'>";
            echo "<div class='produit'>
                    <img src={$produit['image']} alt='polo licorne' width='250' height='280' >
                    <p class='description realistic-marker-highlight'>{$produit['description']}</p>
                    <p class='prix'>{$produit['prix']}</p>
                </div>";
            echo "</a>";
        }

    }

    public function displayProduitsImage($produits){
        foreach ($produits as $produit) {
            echo "<img src={$produit['image']} alt={$produit['description']} >";
        }
    }
    public function displayProduit($produits){        
        foreach ($produits as $produit) {        
            echo "<div class=\"imagesProduit\">  
            <img id=\"productImageMain\" src=\"../../img/produits/shirt1.webp\" alt=\"polo licornes\">    
            <div class=\"sousImagesProduit\">        
            <img src={$produit['image']} alt=\"polo licornes\" class=\"imageList\">        
            <img src={$produit['image']} alt=\"polo licornes\" class=\"imageList\">    
            </div></div><div class=\"description\">    
            <p class=\"grandeLettre\">{$produit['description']}</p>    
            <p id=\"prix\">{$produit['prix']}</p>    
            <ul class=\"petiteLettre\">        
            <li>{$produit['taille']}</li>        
            <li>{$produit['couleur']}</li>    
            </ul></div>";    
        }    
    }

}