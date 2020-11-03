<!DOCTYPE html>
<html lang="pl_PL">
  <head>
    <meta charset="utf-8">

    <title>Mila Logistics</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script type="text/javascript" src="/js/script.js"></script>

  </head>

  <body>

    <nav class="navbar w-85"> <!-- NavBar -->
      <div class="nav__callus">
        <i><img src="/media/phone-icon.svg" width="27px" height="27px" alt="Zadzwoń do nas"></i>
        <h4 class="underline--right-nav"><a href="tel:+48000000000">ZADZWOŃ DO NAS</a></h4>
      </div>
      <div class="nav__menu-switcher">
        <i><img src="/media/forwardmenu-icon.svg" width="27px" height="27px" alt="Otwórz menu"></i>
        <h4 class="underline--right-nav-menu"><a onclick="menuToggle();" class="pointer">MENU</a></h4>
      </div>
    </nav><!-- End of NavBar -->

    <section class="menu" id="menuToggler"> <!-- Full Window Menu -->
      <div class="menu__content">
        <h1 class="underline--left-section-menu">MENU</h1>
        <ul class="nav-items">
          <li><a href="../index.php">HOME</a></li>
          <li><a href="../about-us.php">O NAS</a></li>
          <li><a href="../offer.php">OFERTA</a></li>
          <li><a href="../contact.php">KONTAKT</a></li>
        </ul>
        <div class="nav__callus">
          <i><img src="/media/phone-icon.svg" width="27px" height="27px" alt="Zadzwoń do nas"></i>
          <h4 class="underline--right-nav"><a href="tel:+48000000000">ZADZWOŃ DO NAS</a></h4>
        </div>
      </div>
      <aside class="menu__close" onclick="menuToggle();">
        <div class="menu__close-content">
          <i><img src="../media/close-icon.svg" width="20px" height="20px" alt="Otwórz menu"></i>
          <p>ZAMKNIJ</p>
        </div>
      </aside>
    </section> <!-- End of Full Window Menu -->