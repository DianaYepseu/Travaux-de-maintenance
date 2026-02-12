<?php
$pageTitle = "Espace membre";

$pageCss = [
  "decoration/formulaire.css",
  "decoration/espace-membre.css"
];

$pageJs = [
  "js/texteParDefaut.js",
  "js/espace-membre.js"
];

include __DIR__ . "/includes/header.php";
?>


<div class="content">

  <h1>BARBIE</h1>
  <h2>Fans de Barbie</h2>

  <div class="conteneur-carrousel">
    <div class="conteneur-images">
      <img src="decoration/images/1.png" alt="img1" class="actif" />
      <img src="decoration/images/2.jpg" alt="img2" />
      <img src="decoration/images/a6.jpg" alt="img3" />
      <img src="decoration/images/b6.jpg" alt="img4" />
      <img src="decoration/images/16.jpeg" alt="img5" />
      <img src="decoration/images/13.png" alt="img6" />
    </div>

    <div class="commandes">
      <button class="gauche">
        <i class="fa-solid fa-circle-arrow-left"></i>
      </button>
      <button class="droite">
        <i class="fa-solid fa-circle-arrow-right"></i>
      </button>
    </div>

    <div class="cercles">
      <button data-clic="1" class="cercle actif-cercle"></button>
      <button data-clic="2" class="cercle"></button>
      <button data-clic="3" class="cercle"></button>
      <button data-clic="4" class="cercle"></button>
      <button data-clic="5" class="cercle"></button>
      <button data-clic="6" class="cercle"></button>
    </div>
  </div>

  <div class="container1">
    <!-- formulaire -->
    <form action="espace-membre.php" method="post">
      <fieldset>
        <legend>INCRIPTIONS</legend>

        <div id="pseudo" class="input-container">
          <label for="texte"> Pseudonyme : </label>
          <input type="text" name="login" id="texte" class="nom" />
        </div>

        <div class="input-container">
          <label for="pwd"> Mot de passe : </label>
          <input
            type="password"
            name="pwd"
            id="pwd"
            class="pwd"
            placeholder="Mot de passe :"
          />
        </div>
      </fieldset>

      <div class="input-container">
        <input type="submit" value="S'inscrire" />
      </div>
    </form>
  </div>

  <?php include __DIR__ . "/includes/footer.php"; ?>
</div>

