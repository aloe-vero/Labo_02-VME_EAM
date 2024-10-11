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

public function createUtilisateur($nom, $prenom, $mot_de_Passe, $courriel,$nom_utilisateur,$panier_achat){

    return $this->model->createUtilisateur($nom, $prenom, $mot_de_Passe, $courriel,$nom_utilisateur,$panier_achat);

}}