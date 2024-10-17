document.addEventListener("DOMContentLoaded", function () {
  const sliderMainmage = document.getElementById("productImageMain");
  const sliderImageList = document.getElementsByClassName("imageList");

  // Fonction pour changer l'image principale et ajouter la bordure à l'image cliquée
  function updateMainImage(index) {
    sliderMainmage.src = sliderImageList[index].src;

    // Supprimer la bordure de toutes les images
    for (let i = 0; i < sliderImageList.length; i++) {
      sliderImageList[i].style.border = "none"; // Retirer la bordure
    }

    // Ajouter la bordure à l'image cliquée
    sliderImageList[index].style.border = "3px solid #ff71ce";
  }

  // Ajouter des événements onclick à toutes les images de la liste
  for (let i = 0; i < sliderImageList.length; i++) {
    sliderImageList[i].onclick = function () {
      updateMainImage(i);
    };
  }
  updateMainImage(0);
});
