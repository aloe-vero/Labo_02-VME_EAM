<?php
require_once __DIR__ ."/../Models/AbonnementModel.php";
class AbonnementController {

    private $model;

    public function __construct($database){

        $this->model = new AbonnementModel($database);


    }

    public function getAllAbonnements(){
        return $this->model->getAllAbonnements();
    }

    public function createAbonnement($courriel, $est_abonnee){
        return $this->model->createAbonnement($courriel, $est_abonnee);
    }


public function updateAbonnement($id,$courriel, $est_abonnee)
{
    return $this->model->updateAbonnement($id, $courriel, $est_abonnee);

}

public function deleteAbonnement($id){
return $this->model->deleteAbonnement($id);
}}
