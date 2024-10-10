<?php
require_once 'php/Models/ProduitModel.php';

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

    public function createProduit($type, $image, $description, $prix, $taille, $couleur)
    {
        return $this->model->createProduit($type, $image, $description, $prix, $taille, $couleur);

    }

}