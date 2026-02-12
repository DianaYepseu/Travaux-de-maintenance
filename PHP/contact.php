<?php
$pageTitle = "Contact";

$pageCss = [
  "decoration/formulaire.css",
  "decoration/contact.css"
];

$pageJs = [
  "js/validation.js"
];

include __DIR__ . "/includes/header.php";
?>


<div class="content">
  <script src="js/annee.js" defer></script>

  <h1>BARBIE</h1>
  <h2>Que peux-tu dire de barbie</h2>

  <!-- conteneur général -->
  <div class="container1">
    <!-- formulaire -->
    <form action="contact.php" method="post" id="contact">
      <fieldset>
        <legend>INFORMATIONS PERSONNELLES</legend>

        <div class="input-container">
          <label
            class="tooltip"
            for="login"
            aria-label="Veuillez saisir votre nom."
            data-balloon-pos="left"
          >
            Nom:
          </label>

          <input
            type="text"
            name="login"
            id="login"
            class="nom"
            placeholder="Nom utlisateur : "
          />
          <span id="erreurLogin" class="erreur"></span>
        </div>

        <div id="emailLabel" class="input-container">
          <label
            class="tooltip"
            for="email"
            aria-label="Veuillez saisir votre email."
            data-balloon-pos="left"
          >
            Email:
          </label>

          <input id="email" type="text" name="email" class="email" />
          <span id="erreurEmail" class="erreur"></span>
        </div>
      </fieldset>

      <fieldset>
        <legend>APPRÉCIATIONS</legend>

        <div class="input-container">
          <textarea
            name="commentaire"
            id="commentaire"
            cols="50"
            rows="30"
            placeholder="Entrer votre commentaire..."
          ></textarea>
        </div>

        <div class="input-container">
          <label for="commentaire1"> Les univers de Barbie</label>
          <br />

          <select name="commentaire" id="commentaire1">
            <option value="Choisir">Choisir</option>
            <option value="Barbie Dreamtopia">Barbie Dreamtopia</option>
            <option value="Barbie Fashionistas">Barbie Fashionistas</option>
            <option value="Barbie Color Reveal">Barbie Color Reveal</option>
            <option value="Barbie Maisons et Véhicules">
              Barbie Maisons et Véhicules
            </option>
            <option value="Barbie Signature ">Barbie Signature</option>
            <option value="Barbie Princesse Adventure">
              Barbie Princesse Adventure
            </option>
            <option value="Barbie Métiers ">Barbie Métiers</option>
          </select>

          <br />
        </div>

        <div class="input-container">
          <label for="appreciation"> Appréciez vous Barbie ??? : </label>
          <br />
          <input type="radio" name="appreciation" id="appreciation" /> Oui
          <input type="radio" name="appreciation" id="appreciation2" /> Non
          <input type="radio" name="appreciation" id="appreciation3" /> Je ne sais pas
          <br />
        </div>
      </fieldset>

      <div class="input-container">
        <input type="submit" value="Envoyer" />
      </div>
    </form>
  </div>

  <?php include __DIR__ . "/includes/footer.php"; ?>
</div>
