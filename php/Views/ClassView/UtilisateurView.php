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

    public function displayPageUser($utilisateurs){


        foreach ($utilisateurs as $utilisateur) {

            echo "<p id=\"titre\">MON PROFIL</p>
            <p class=\"bienvenue\">Bonjour {$utilisateur['prenom']} {$utilisateur['nom']},<br>
        Bienvenue sur votre profil utilisateur!</p>
            <div  id=\"connexionForm\" >
                <input id=\"prenom\" name=\"prenom\" type=\"text\" value={$utilisateur['prenom']} >
                <br>
                <input id=\"nomDeFamille\" name=\"nomDeFamille\" type=\"text\" value={$utilisateur['nom']} >
                <br>
                <input id=\"email\" name=\"email\" type=\"text\" value={$utilisateur['courriel']}>
                <br>
                <input id=\"mdp\" name=\"mdp\" type=\"text\"  value=\"\">
                <br>
                <input id=\"buttonModification\" type=\"submit\" value=\"MODIFIER\">
            </div>";
        }

    }

}