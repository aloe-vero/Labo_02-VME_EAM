<?php

class UtilisateurModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;

    }
    public function getAllUtilisateurs() {
        $sql = "SELECT * FROM `utilisateurs`";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUtilisateur($nom, $prenom, $mot_de_passe, $courriel,$nom_utilisateur) {
        $sql = "INSERT INTO utilisateurs (nom, prenom, mot_de_passe,courriel,nom_utilisateur) VALUES (:nom , :prenom, :mot_de_passe,:courriel,:nom_utilisateur,)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nom',$nom, PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);
        $stmt->bindValue(':courriel', $courriel, PDO::PARAM_STR);
        $stmt->bindValue(':nom_utilisateur', $nom_utilisateur, PDO::PARAM_STR);
        return $stmt->execute();

    }

    public function updateUtilisateur($id,$nom, $prenom, $mot_de_passe, $courriel,$nom_utilisateur) {
        $sql = "UPDATE utilisateurs SET nom = :nom, prenom = :prenom, mot_de_passe= :mot_de_passe, courriel = :courriel, nom_utilisateur = :nom_utilisateur WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);
        $stmt->bindValue(':courriel', $courriel, PDO::PARAM_STR);
        $stmt->bindValue(':nom_utilisateur', $nom_utilisateur, PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function deleteUtilisateur($id) {
$sql = "DELETE FROM utilisateurs WHERE id = :id";
$stmt = $this->db->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_STR);
return $stmt->execute();
    }
}