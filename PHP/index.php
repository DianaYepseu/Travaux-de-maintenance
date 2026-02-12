<?php
$pageTitle = "Accueil";

/* Assets spécifiques à la page d'accueil */
$pageCss = [
  "decoration/formulaire.css",
  "decoration/index.css"
];

$pageJs = [
  "js/compteARebour.js"
];

include __DIR__ . "/includes/header.php";
?>

<div class="content">

  <div class="imagedefond"></div>

  <h1>BARBIE</h1>
  <h2>Généralités</h2>

  <div class="liste-articles1">
    <div class="article1">
      <img src="decoration/images/birth.jpg" alt="image6" id="image6" />
      <p>bientôt l'anniversaire de Barbie.</p>

      <div id="decompteJs">
        <table>
          <tr>
            <td>Jours</td>
            <td>Heures</td>
          </tr>
          <tr>
            <td id="jours"></td>
            <td id="heures"></td>
          </tr>
          <tr>
            <td>Minutes</td>
            <td>secondes</td>
          </tr>
          <tr>
            <td id="minutes"></td>
            <td id="secondes"></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="article1">
      <img src="decoration/images/ens.jpg" alt="image5" id="image5" />
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
        velit aperiam nesciunt praesentium natus odio harum ullam laborum
        consequatur.
      </p>
    </div>

    <div class="article1">
      <h3>Contact</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
        pariatur quia, illo animi, explicabo
      </p>
      <a href="contact.php" class="bouton">contactez-nous...</a>
    </div>
  </div>

  <a href="vignette-vedette.php" class="bouton">
    <i class="fa-solid fa-circle-arrow-right"></i>
    Clicker ici pour plus de détails
    <i class="fa-solid fa-circle-arrow-left"></i>
  </a>

  <a href="galerie-mobile.php" class="bouton">
    <i class="fa-solid fa-circle-arrow-right"></i>
    Clicker ici pour plus de photos
    <i class="fa-solid fa-circle-arrow-left"></i>
  </a>

  <a href="faq.php" class="bouton">
    <i class="fa-solid fa-circle-arrow-right"></i>
    Clicker ici pour plus d'informations
    <i class="fa-solid fa-circle-arrow-left"></i>
  </a>

  <?php include __DIR__ . "/includes/footer.php"; ?>
</div>

