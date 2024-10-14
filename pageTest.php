<?php
// Test 01
require_once 'php/View/ProduitView.php';
require_once 'php/Controller/ProduitController.php';

require_once 'php/View/UtilisateurView.php';
require_once 'php/Controller/UtilisateurController.php';

require_once 'php/Controller/AbonnementController.php';
require_once 'php/View/AbonnementView.php';


$database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');

//$produitController = new ProduitController($database);
//$produitView = new ProduitView();
//echo "<p>Produits</p>";
//$produitController->createProduit("Chemise", "img/tshirt1.webp", "Une chemise", "10", "30", "Rouge");
//$produits = $produitController->getAllProduits();
//$produitView->displayProduits($produits);
//$produitController->updateProduit(70, "img.png", "UNE CHEMISE QUI EST GAY", "1000.000", "45", "BLEU")
//$produitController->deleteProduit("66");

//echo "<p>Utilisateurs</p>";
//
//$utilisateurController = new UtilisateurController($database);
//$utilisateurView = new UtilisateurView();
//

//
//$utilisateurController->createUtilisateur("kIVA", "momo", "HELLOWORLD", "HELL@aol.com", "HELLDIVERS");
//$utilisateurs = $utilisateurController->getAllUtilisateurs();
//$utilisateurView->displayUtilisateurs($utilisateurs);
//$utilisateurController->updateUtilisateur(41,"Joanna", "Doe", "password","Joeanna@aol.com","hoeanna");
//$utilisateurController->deleteUtilisateur(34);


//
//echo "<p>Abonnements</p>";
//
//$abonnementController = new AbonnementController($database);
//$abonnementView = new AbonnementView();
//
//$abonnementController-> createAbonnement("toto@aol.com","1",0);
//$abonnementController->deleteAbonnement(14);
//$abonnementController->updateAbonnement(14, "chola.com",1);
//$abonnements = $abonnementController->getAllAbonnements();
//$abonnementView->displayAbonnements($abonnements);
//


