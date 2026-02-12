<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      rel="shortcut icon"
      href="decoration/images/ghost.ico"
      type="image/x-icon"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- CSS commun -->
    <link rel="stylesheet" href="decoration/general.css" />
    <link rel="stylesheet" href="decoration/menu.css" />

    <!-- CSS spécifique à la page -->
    <?php
      if (!empty($pageCss)) {
        foreach ($pageCss as $css) {
          echo "<link rel='stylesheet' href='" . htmlspecialchars($css, ENT_QUOTES) . "' />\n";
        }
      }
    ?>

    <!-- JS commun -->
    <script src="js/menu.js" defer></script>

    <!-- JS spécifique à la page -->
    <?php
      if (!empty($pageJs)) {
        foreach ($pageJs as $js) {
          echo "<script src='" . htmlspecialchars($js, ENT_QUOTES) . "' defer></script>\n";
        }
      }
    ?>

    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) : "mon site"; ?></title>
  </head>

  <body>
    <header>
      <!-- menu de navigation -->
      <nav class="navbar">
        <div class="navbar-toggle" id="js-navbar-toggle">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>

        <ul class="menu" id="js-menu">
          <li>
            <a href="index.php">
              <i class="fa-solid fa-sitemap fa-2x"></i>Accueil
            </a>
          </li>

          <li>
            <a href="acteurs-principal.php">
              <i class="fa-solid fa-person-burst fa-2x"></i>
              <i class="fa-solid fa-caret-down"></i>Acteurs
            </a>
            <ul>
              <li><a href="barbie.php">Barbie</a></li>
              <li><a href="ken's.php">Ken's</a></li>
              <li><a href="gloria.php">Gloria</a></li>
            </ul>
          </li>

          <li>
            <a href="mission.php">
              <i class="fa-solid fa-notdef fa-2x"></i>Mission
            </a>
          </li>

          <li>
            <a href="espace-membre.php">
              <i class="fa-solid fa-person-shelter fa-2x"></i>Membre
            </a>
          </li>

          <li>
            <a href="contact.php">
              <i class="fa-solid fa-square-phone fa-2x"></i>Contact
            </a>
          </li>

          <li>
            <a href="faq.php">
              <i class="fa-solid fa-question"></i>FAQ
            </a>
          </li>
        </ul>
      </nav>

      <a
        href="decoration/images/barbie2.jpg"
        target="_blank"
        rel="noopener noreferrer"
      >
        <img
          src="decoration/images/barbie2.jpg"
          alt="header"
          class="header"
        />
      </a>
    </header>
