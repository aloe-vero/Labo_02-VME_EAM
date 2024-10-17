<?php

class UtilisateurView
{


    public function displayUtilisateurs($utilisateurs)
    {

        echo "<table>";
        foreach ($utilisateurs as $utilisateur) {
            echo "<tr><td>{$utilisateur['id']}</td><td>{$utilisateur['nom']}</td><td>{$utilisateur['prenom']}</td><td>{$utilisateur['courriel']}</td></tr>";
        }
        echo "</table>";

    }

}