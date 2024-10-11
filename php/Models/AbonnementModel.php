<?php

class AbonnementModel {

    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllAbonnements() {
        $sql = "SELECT * FROM `abonnement`";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }



}