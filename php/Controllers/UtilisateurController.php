<?php
require_once 'php/Models/UtilisateurModel.php';
class UtilisateurController {

private $model;

public function __construct($database)
{
$this->model = new UtilisateurModel($database);

}

public function getAllUtilisateurs(){
    return $this->model->getAllUtilisateurs();
}

public function createUtilisateur($nom, $prenom, $mot_de_Passe, $courriel){

    return $this->model->createUtilisateur($nom, $prenom, $mot_de_Passe, $courriel);

}
public function updateUtilisateur($id,$nom, $prenom, $mot_de_passe, $courriel){
    return $this->model->updateUtilisateur($id,$nom, $prenom, $mot_de_passe, $courriel);
}
public function deleteUtilisateur($id){
    return $this->model->deleteUtilisateur($id);
}


}