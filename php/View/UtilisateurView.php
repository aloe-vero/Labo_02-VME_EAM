<?php

class UtilisateurView
{


    public function displayProduits($utilisateurs)
    {

        echo "<table>";
        foreach ($utilisateurs as $utilisateur) {
            echo "<tr><td>{$utilisateur['nom']}</td><td>{$utilisateur['prenom']}</td><td>{$utilisateur['courriel']}</td></tr>";
        }
        echo "</table>";

    }

}