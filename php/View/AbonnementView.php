<?php

class AbonnementView
{
public function displayAbonnements($abonnements)
{


    echo "<table>";
    foreach ($abonnements as $abonnement) {
        echo "<tr><td>{$abonnement['id']}</td><td>{$abonnement['courriel']}</td><td>{$abonnement['utilisateur_id']}</td><td>{$abonnement['est_abonnee']}</td></tr>";
    }
    echo "</table>";
}
}