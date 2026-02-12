<?php
$pageTitle = "Vignette-vedette";

/* Assets spécifiques à cette page */
$pageCss = [
  "decoration/vignette.css"
];

$pageJs = [
  "js/vignette.js"
];

include __DIR__ . "/includes/header.php";
?>

<div class="content">

  <div class="flex-container">
    <div class="vignette-barbie" id="barbie1">
      <img src="decoration/images/1.png" alt="1" />
    </div>
    <div class="vignette-barbie" id="barbie2">
      <img src="decoration/images/fam.jpg" alt="2" />
    </div>
    <div class="vignette-barbie" id="barbie3">
      <img src="decoration/images/3.png" alt="3" />
    </div>
    <div class="vignette-barbie" id="barbie4">
      <img src="decoration/images/a5.png" alt="4" />
    </div>
    <div class="vignette-barbie" id="barbie5">
      <img src="decoration/images/a6.jpg" alt="5" />
    </div>
  </div>

  <div id="zone-affichage"></div>

  <div class="detail-barbie" id="detail-barbie1">
    <h4 class="barbie-nom">L'amour de Barbie</h4>
    <img class="barbie-images" src="decoration/images/1.png" alt="1" />

    <div class="barbie-description">
      <h5>La vie amoureuse de Barbie</h5>
      <p>
        Lorem ipsum dolor sit amet, accusantium officiis quo, consequuntur
        natus, repudiandae, dolore id quis harum! Harum maxime veritatis
        doloremque ea, tempora in iste quasi deleniti enim debitis amet
        libero quam nam repellat non explicabo odio? Tempore minima quae
        accusamus corporis.
      </p>

      <h5>Est-ce qu'elle sort avec Ken</h5>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. cumque esse
        vel fugit, necessitatibus, reprehenderit iusto quos velit
        repellendus deserunt quidem repellat deleniti omnis officiis?
      </p>

      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque,
        officiis facere? Saepe, iure provident? Nulla totam optio sunt et
        molestiae?
      </p>

      <a href="https://www.gqmagazine.fr/article/ken-la-veritable-histoire-du-petit-copain-de-barbie">
        Voir les details sur la vie amoureuse de Barbie.
      </a>
    </div>
  </div>

  <div class="detail-barbie" id="detail-barbie2">
    <h4 class="Barbie-nom">Famille de barbie</h4>
    <img class="barbie-images" src="decoration/images/fam.jpg" alt="2" />

    <div class="barbie-description">
      <h5>La vie familiale de barbie</h5>
      <p>
        Lorem ipsum dolor itaque est distinctio nihil! Provident nam
        nesciunt sint assumenda. Culpa sed illum nemo cum quas perferendis,
        iste minima labore enim excepturi necessitatibus? Velit voluptatum
        autem nobis omnis odit. Amet maiores repellendus modi ipsam atque
        dolores ducimus repellat enim necessitatibus. Aperiam aliquid
        veritatis alias! Atque, eum error optio ipsam dicta provident!
      </p>

      <h5>Qui sont ses préférés dans sa famille</h5>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
        voluptatem totam amet aperiam, nam quia atque. Aliquam animi cum
        quos?
      </p>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos
        excepturi odit, nemo cumque asperiores reprehenderit veritatis
        quidem nam eligendi dolores cum incidunt praesentium hic. Suscipit
        similique facilis atque sit eius, assumenda aperiam obcaecati.
        Voluptatem, assumenda!
      </p>

      <a href="https://sherpas.com/blog/barbie/#:~:text=Dans%20les%20r%C3%A9cits%20de%20ses%20aventures%2C%20on%20apprend,Skipper%2C%20Stacie%20et%20enfin%20Chelsea%2C%20la%20petite%20derni%C3%A8re.">
        Voir les details sur la vie familiale de Barbie
      </a>
    </div>
  </div>

  <div class="detail-barbie" id="detail-barbie3">
    <h4 class="barbie-nom">Professison de Barbie</h4>
    <img class="barbie-images" src="decoration/images/3.png" alt="3" />

    <div class="barbie-description">
      <h5>La vie profession de Barbie</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis
        deserunt reprehenderit consectetur nisi provident, officia
        aspernatur, molestiae autem sequi labore nam suscipit, ab
        repellendus. Temporibus est doloribus dolor et optio?
      </p>

      <h5>Son poste occupé</h5>
      <p>
        Ce Pokémon est asexué, il n'y a donc pas de Celebi mâle ou femelle.
      </p>

      <p>
        Dans Pokémon Donjon Mystère : Explorateurs de l'Ombre et du Temps,
        un Celebi chromatique est désigné comme femelle, même s'il reste
        asexué.
      </p>

      <a href="https://www.vogue.fr/culture/article/barbie-60-ans-dans-la-vie-dune-icone-pop">
        Voir les details sur la profession de Barbie
      </a>
    </div>
  </div>

  <div class="detail-barbie" id="detail-barbie4">
    <h4 class="barbie-nom">Barbie et les animaux</h4>
    <img class="barbie-images" src="decoration/images/a5.png" alt="4" />

    <div class="barbie-description">
      <h5>Ses animaux préférés</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis
        deserunt reprehenderit consectetur nisi provident, officia
        aspernatur, molestiae autem sequi labore nam suscipit, ab
        repellendus. Temporibus est doloribus dolor et optio?
      </p>

      <h5>Les animaux</h5>
      <p>Lieu d'habitation</p>

      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis
        magni eligendi non nemo cum autem?
      </p>

      <a href="https://www.vogue.fr/culture/article/barbie-60-ans-dans-la-vie-dune-icone-pop">
        Voir les details sur la profession de Barbie
      </a>
    </div>
  </div>

  <div class="detail-barbie" id="detail-barbie5">
    <h4 class="barbie-nom">Barbie avec les poneys</h4>
    <img class="barbie-images" src="decoration/images/a6.jpg" alt="5" />

    <div class="barbie-description">
      <h5>Son préférée</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis
        deserunt reprehenderit consectetur nisi provident, officia
        aspernatur, molestiae autem sequi labore nam suscipit, ab
        repellendus. Temporibus est doloribus dolor et optio?
      </p>

      <h5>Le poney</h5>
      <p>.</p>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
        dicta saepe quam assumenda beatae minus nobis dolorum illo sint
        accusantium?
      </p>

      <a href="https://firsttimemommn.com/barbie-her-sisters-in-a-puppy-chase-5-winners/">
        Voir les details sur la profession de Barbie
      </a>
    </div>
  </div>

  <?php include __DIR__ . "/includes/footer.php"; ?>
</div>

