 <?php
$pageTitle = "Galerie";

/* Assets spécifiques à cette page */
$pageCss = [
  "decoration/galerie.css"
];

$pageJs = [
  "js/galerie-mobile.js"
];

include __DIR__ . "/includes/header.php";
?>

<div class="content">
  <div class="container">
    <article class="photos">
      <div>
        <a
          class="example-image-link"
          href="decoration/images/1.png"
          data-lightbox="example-set"
          data-title="Barbie avec des lunettes."
        >
          <img class="example-image" src="decoration/images/1.png" alt="" />
        </a>
        <div class="texte">
          <h3>Barbie1</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Obcaecati, doloribus.
          </p>
        </div>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/16.jpeg"
        data-lightbox="example-set"
        data-title="Barbie la Poupée."
      >
        <img class="example-image" src="decoration/images/16.jpeg" alt="" />
      </a>
      <div class="texte">
        <h3>Poupée Barbie</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptate, voluptas.
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/3.png"
        data-lightbox="example-set"
        data-title="Barbie et l'oiseau."
      >
        <img class="example-image" src="decoration/images/3.png" alt="" />
      </a>
      <div class="texte">
        <h3>Pop star</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam,
          impedit.
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/14.jpg"
        data-lightbox="example-set"
        data-title="Barbie en bateau avec ses amies."
      >
        <img class="example-image" src="decoration/images/14.jpg" alt="" />
      </a>
      <div class="texte">
        <h3>Bateau Barbie</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Assumenda, iste.
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/famille.jpg"
        data-lightbox="example-set"
        data-title="Barbie et sa famille."
      >
        <img
          class="example-image"
          src="decoration/images/famille.jpg"
          alt=""
        />
      </a>
      <div class="texte">
        <h3>Famille de barbie</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa,
          dignissimos.
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/a4.png"
        data-lightbox="example-set"
        data-title="Barbie et l'elephant."
      >
        <img class="example-image" src="decoration/images/a4.png" alt="" />
      </a>
      <div class="texte">
        <h3>Princesse Barbie</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat,
          quae?.
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/b6.jpg"
        data-lightbox="example-set"
        data-title="Barbie au long cheveux."
      >
        <img class="example-image" src="decoration/images/b6.jpg" alt="" />
      </a>
      <div class="texte">
        <h3>Pose photo</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Expedita, quae?
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/a5.png"
        data-lightbox="example-set"
        data-title="Barbie et les animaux."
      >
        <img class="example-image" src="decoration/images/a5.png" alt="" />
      </a>
      <div class="texte">
        <h3>Barbie et les animaux</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis,
          saepe!
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/R1.png"
        data-lightbox="example-set"
        data-title="Paysage."
      >
        <img class="example-image" src="decoration/images/R1.png" alt="" />
      </a>
      <div class="texte">
        <h3>Paysage du monde de barbie</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
          laboriosam.
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/a2.png"
        data-lightbox="example-set"
        data-title="Barbie et son cheval blanc"
      >
        <img class="example-image" src="decoration/images/a2.png" alt="" />
      </a>
      <div class="texte">
        <h3>Barbie et son cheval</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Inventore, voluptas!.
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/a1.png"
        data-lightbox="example-set"
        data-title="Barbie et son poney"
      >
        <img class="example-image" src="decoration/images/a1.png" alt="" />
      </a>
      <div class="texte">
        <h3>Barbie et son cheval volant</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
          perferendis..
        </p>
      </div>
    </article>

    <article class="photos">
      <a
        class="example-image-link"
        href="decoration/images/8.jpg"
        data-lightbox="example-set"
        data-title="Barbie et les fées"
      >
        <img class="example-image" src="decoration/images/8.jpg" alt="" />
      </a>
      <div class="texte">
        <h3>Barbie et les fées</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Excepturi, modi?.
        </p>
      </div>
    </article>
  </div>

  <?php include __DIR__ . "/includes/footer.php"; ?>
</div>
