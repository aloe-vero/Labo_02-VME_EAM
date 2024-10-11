<?php

class UtilisateurModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;

    }
    public function getAllUtilisateurs() {
        $sql = "SELECT * FROM `utilisateur`";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUtilisateur($nom, $prenom, $mot_de_Passe, $courriel,$nom_utilisateur,$panier_achat) {
        $sql = "INSERT INTO utilisateur (nom, prenom, mot_de_passe,courriel,nom_utilisateur,panier_achat) VALUES (:nom , :prenom, :mot_de_passe,:courriel,:nom_utilisateur,:panier_achat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nom',$nom, PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue(':mot_de_passe', $mot_de_Passe, PDO::PARAM_STR);
        $stmt->bindValue(':courriel', $courriel, PDO::PARAM_STR);
        $stmt->bindValue(':nom_utilisateur', $nom_utilisateur, PDO::PARAM_STR);
        $stmt->bindValue(':panier_achat', $panier_achat, PDO::PARAM_STR);
        return $stmt->execute();

    }

    public function updateUtilisateur() {

    }

    public function deleteUtilisateur() {

    }
}