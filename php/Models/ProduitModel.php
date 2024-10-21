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
                $sql = "SELECT * FROM `produits` ORDER BY `produits`.`type` DESC;";
                //SELECT * FROM `produits` ORDER BY `produits`.`type` ASC
                $result = $this->db->query($sql);
                return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getProduitByType($type){
        $sql = "SELECT * FROM `produits` WHERE `type` = :type;";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':type', $type, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProduitByColor($couleur){
                $sql = "SELECT * FROM `produits` WHERE `couleur` = :couleur;";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':couleur', $couleur, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProduitBySize($taille){
                $sql = "SELECT * FROM `produits` WHERE `taille` LIKE :taille;";
                $taille = "%{$taille}%";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':taille', $taille, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProduitByPrice($minPrix, $maxPrix){
                $sql = "SELECT * FROM `produits` WHERE `prix` BETWEEN :minPrix AND :maxPrix;";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':minPrix', $minPrix, PDO::PARAM_STR);
                $stmt->bindParam(':maxPrix', $maxPrix, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProduitsFiltrer($type,$taille,$couleur,$minPrix, $maxPrix){
                $sql = "SELECT * FROM `produits` WHERE 1 = 1";
                $params = [];
            
                if ($type) {
                    $sql .= " AND `type` = :type";
                    $params[':type'] = $type;
                }
            
                if ($couleur) {
                    $sql .= " AND `couleur` = :couleur";
                    $params[':couleur'] = $couleur;
                }
            
                if ($taille) {
                    $sql .= " AND `taille` LIKE :taille";
                    $params[':taille'] = "%{$taille}%";
                }
            
                if ($minPrix !== null && $maxPrix !== null) {
                    $sql .= " AND `prix` BETWEEN :minPrix AND :maxPrix";
                    $params[':minPrix'] = $minPrix;
                    $params[':maxPrix'] = $maxPrix;
                }
            
                $stmt = $this->db->prepare($sql);
                foreach ($params as $key => $value) {
                    $stmt->bindValue($key, $value, PDO::PARAM_STR);
                }
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


        public function getProduitById($id){
            $sql = "SELECT * FROM `produits` WHERE `id` = :id;";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function createProduit($type, $nom, $image, $description, $prix, $taille, $couleur)
        {
                $sql = "INSERT INTO produits (type, nom, image, description,prix,taille,couleur) VALUES (:type, :nom, :image, :description, :prix, :taille, :couleur)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':type', $type, PDO::PARAM_STR);
                $stmt->bindValue(':type', $nom, PDO::PARAM_STR);
                $stmt->bindValue(':image', $image, PDO::PARAM_STR);
                $stmt->bindValue(':description', $description, PDO::PARAM_STR);
                $stmt->bindValue(':prix', $prix, PDO::PARAM_STR);
                $stmt->bindValue(':taille', $taille, PDO::PARAM_STR);
                $stmt->bindValue(':couleur', $couleur, PDO::PARAM_STR);
                return $stmt->execute();
        }

        public function updateProduit($id, $type, $nom, $image, $description, $prix, $taille, $couleur)
        {
            $sql = "UPDATE produits SET type=:type, nom=:nom, image=:image, description= :description, prix = :prix, taille = :taille, couleur = :couleur WHERE id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':type', $type, PDO::PARAM_STR);
            $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':prix', $prix, PDO::PARAM_STR);
            $stmt->bindValue(':taille', $taille, PDO::PARAM_STR);
            $stmt->bindValue(':couleur', $couleur, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();

        }

        public function deleteProduit($id)
        {
            $sql = "DELETE FROM produits WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            return $stmt->execute();
        }
}