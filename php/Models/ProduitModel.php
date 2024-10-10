<?php
class ProduitModel
{
        private $db;

        public function __construct($database)
        {
                $this->db = $database;
        }
        public function getAllProduits()
        {
                $sql = "SELECT * FROM `produit`;";
                $result = $this->db->query($sql);
                return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function createProduit($type, $image, $description, $prix, $taille, $couleur)
        {
                $sql = "INSERT INTO produit (type, image, description,prix,taille,couleur) VALUES (:type, :image, :description,:prix,:taille,:couleur)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':type', $type, PDO::PARAM_STR);
                $stmt->bindValue(':image', $image, PDO::PARAM_STR);
                $stmt->bindValue(':description', $description, PDO::PARAM_STR);
                $stmt->bindValue(':prix', $prix, PDO::PARAM_STR);
                $stmt->bindValue(':taille', $taille, PDO::PARAM_STR);
                $stmt->bindValue(':couleur', $couleur, PDO::PARAM_STR);
                return $stmt->execute();
        }

        public function updateProduit()
        {

        }

        public function deleteProduit()
        {

        }
}