<?php

class AbonnementModel {

    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllAbonnements() {
        $sql = "SELECT * FROM `abonnement`;";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    public function createAbonnement($courriel, $utilisateur_id, $est_abonnee) {
        $sql = "INSERT INTO abonnements (courriel, utilisateur_id, est_abonnee) VALUES (:courriel, :utilisateur_id, :est_abonnee)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':courriel', $courriel, PDO::PARAM_STR);
        $stmt->bindValue(':utilisateur_id', $utilisateur_id, PDO::PARAM_STR);
        $stmt->bindValue(':est_abonnee', $est_abonnee, PDO::PARAM_BOOL);
        return $stmt->execute();
    }

public function updateAbonnement($id,$courriel, $est_abonnee){
$sql = "UPDATE abonnements SET courriel = :courriel,est_abonnee = :est_abonnee WHERE id = :id ";
$stmt = $this->db->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(":courriel", $courriel, PDO::PARAM_STR);
$stmt->bindValue(":est_abonnee", $est_abonnee,PDO::PARAM_BOOL);
return $stmt->execute();
}

public function deleteAbonnement($id) {
        $sql = "DELETE FROM abonnements WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
}

}