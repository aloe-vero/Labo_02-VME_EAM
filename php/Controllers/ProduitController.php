<?php
require_once __DIR__ .'/../Models/ProduitModel.php';

class ProduitController
{

    private $model;
    public function __construct($database)
    {
        $this->model = new ProduitModel($database);
    }


    public function getAllProduits()
    {
        return $this->model->getAllProduits();
    }

    public function getProduitByType($type){
        return $this->model->getProduitByType($type);
    }
    public function getProduitById($id){
        return $this->model->getProduitById($id);
    }
    public function createProduit($type, $nom, $image, $description, $prix, $taille, $couleur)
    {
        return $this->model->createProduit($type, $nom, $image, $description, $prix, $taille, $couleur);

    }
    public function updateProduit($id, $type, $nom, $image, $description, $prix, $taille, $couleur){
        return $this->model->updateProduit($id, $type, $nom, $image,$description,$prix,$taille, $couleur);
    }
    public function deleteProduit($id){
        return $this->model->deleteProduit($id);
    }
}