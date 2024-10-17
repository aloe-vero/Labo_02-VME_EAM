<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylePageProduit.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
    <title>Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <div class="containerProduit">
            <div class="imagesProduit">
                <img id="productImageMain" src="img/produits/shirt1.webp" alt="polo licornes">
                <div class="sousImagesProduit">
                    <img src="img/produits/shirt1.webp" alt="polo licornes" class="imageList">
                    <img src="img/produits/tie3.webp" alt="polo licornes" class="imageList">
                </div>
            </div>
            <div class="description">
                <p class="grandeLettre">DESCRIPTION</p>
                <p id="prix">PRIX</p>
                <ul class="petiteLettre">
                    <li>DESCRIPTION</li>
                    <li>DESCRIPTION</li>
                    <li>DESCRIPTION</li>
                    <li>DESCRIPTION</li>
                    <li>DESCRIPTION</li>
                </ul>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>