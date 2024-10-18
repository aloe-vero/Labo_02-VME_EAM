<?php
$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');

$email = $_POST['email'];
echo $email;
require "php/Controllers/AbonnementController.php";
$ac= new AbonnementController($conn);


$ac ->createAbonnement($email,1);
