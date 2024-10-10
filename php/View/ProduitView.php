<?php

class ProduitView
{


    public function displayProduits($produits)
    {

        echo "<table>";
        foreach ($produits as $produit) {
            echo "<tr><td>{$produit['type']}</td><td>{$produit['image']}</td><td>{$produit['description']}</td></tr>";
        }
        echo "</table>";

    }

}