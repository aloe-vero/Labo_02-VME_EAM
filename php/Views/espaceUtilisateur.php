<?php
session_start();
require "php/Controllers/UtilisateurController.php";
require "php/Views/ClassView/UtilisateurView.php";
require_once "php/Database.php";
$db = Database::getInstance();
$conn = $db->getConnection();

$userController= new UtilisateurController($conn);
$userView =  new UtilisateurView();

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $_SESSION['id'] = $id;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleEspaceUtilisateur.css?version=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Espace utilisateur — Rich Ricasso</title>
</head>
<body>
<div class="container">
    <?php require 'php/Views/partials/header.php'; ?>
        <form class="connexion" action="php/modificationUser.php" method="post">
        <?php if (isset($_SESSION['modificationConf'])): ?>
                <div id="confirmation">
                    <p><?php echo $_SESSION['modificationConf']; ?></p>
                </div>
        <?php endif; ?>
          <?php
          $user = $userController->getUtilisateurById($id);
          $userView->displayPageUser($user);
          ?>
        </form>
    <?php require 'php/Views/partials/footer.php'; ?>
    <?php
    //Effacer les erreurs et les anciennes valeurs après affichage
    if (isset($_SESSION['errors'])) unset($_SESSION['errors']);
    if (isset($_SESSION['post_data'])) unset($_SESSION['post_data']);
    if (isset($_SESSION['modificationConf'])) unset($_SESSION['modificationConf']);
    ?>
    </div>
</body>
</html>