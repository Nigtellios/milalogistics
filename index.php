<?php
  include 'header.php';
?>

    <main> <!-- Sections -->

      <section class="container-hero"> <!-- HERO Section -->
        <div class="wrapper w-85">
          <div class="hero__follow">
            <i><img src="../media/facebook-icon-white.svg" width="25px" height="25px" alt="Polub naszą stronę"></i>
            <p class="underline--right-follow"><a href="https://facebook.com" target="_blank">Polub naszą stronę!</a></p>
          </div>
          <div class="hero__logotype">
            <img src="../media/mila-logistics-logotype.svg" width="500px" height="145px" alt="Logotyp Mila Logistics">
          </div>
          <div class="hero__encour">
            <div class="hero__tag">
              <h4>ZAUFAJ NAM</h4>
            </div>
            <div class="hero__title">
              <h3 class="underline--left-title">Jesteśmy firmą spedycyjną</h3>
            </div>
          </div>
        </div>
      </section> <!-- //End of HERO Section -->

      <section class="container-about-us"> <!-- ABOUT US Section -->

        <div class="wrapper-2col w-85">

          <div class="about-us__map elipses">
            <img src="../media/static-map.png" width="960px" height="465px" alt="Międzynarodowy zasięg usług">
          </div>

          <div class="map-shadow"></div>

          <div class="about-us__content">
            <h1 class="underline--left-section heading">O NAS</h1>
              <div class="about-us__content-wrap">
                <h3>Profesjonalizm</h3>
                <p class="p-5">
                  Jesteśmy firmą spedycyjną zbudowaną z wysoko wyspecjalizowanej i doświadczonej kadry logistyków oraz spedytorów.
                  Zdobyte przez Nas doświadczenie pozwala nam na organizację transportu drogowego, krajowego jak i międzynarodowego. 
                </p>
                <p class="p-5">
                  Szeroki wachlarz usług pozwala nam kompleksowo zająć się państwa ładunkiem. Chcesz dowiedzieć się więcej? 
                  Zapraszamy do zapoznania się z naszą ofertą!
                </p>
                <div class="offer__button-wrap">
                  <a class="button p--buttons" href="../about-us.html">
                    ZAPOZNAJ SIĘ Z NAMI
                  </a>
                </div>
              </div>
            </div>

        </div>

      </section> <!-- End of ABOUT US Section -->

      <section class="container-offer"> <!-- OFFER Section -->
        <div class="wrapper-2col w-85">
          <div class="offer__content">
            <h3>Warto nam zaufać</h3>
            <div class="offer__tiles-wrapper">
              <div class="offer__tile">
                <i class="offer__tile-icon"><img src="../media/doc-icon-gray.svg" width="45px" height="45px"></i>
                <h6>Dokumentacja</h6>
                <p>Wypełnimy za Ciebie odpowiednią dokumentację i zadbamy o jej poprawność.</p>
              </div>
              <div class="offer__tile">
                <i class="offer__tile-icon"><img src="../media/clep-icon-gray.svg" width="45px" height="45px"></i>
                <h6>Optymalizacja</h6>
                <p>Zaplanujemy transport całopojazdowy (FTL), oraz transport w doładunku (LTL).</p>
              </div>
              <div class="offer__tile">
                <i class="offer__tile-icon"><img src="../media/heart-icon-gray.svg" width="65px" height="65px"></i>
                <h6>Pośrednictwo</h6>
                <p>Pomożemy ci i doradzimy w ramach czynności obsługi odpraw celnych.</p>
              </div>
              <div class="offer__tile">
                <i class="offer__tile-icon"><img src="../media/lightbulb-icon-gray.svg" width="45px" height="45px"></i>
                <h6>Pomysłowość</h6>
                <p>Doradzimy ci w wyborze optymalnego rodzaju pojazdu dla każdego ładunku.</p>
              </div>
            </div>
            <div class="offer__content-desc">
              <p>
                Zapraszamy do zapoznania się z pełną ofertą. Pozycja która cię interesuje nie widnieje na liście?
                Zadzwoń do nas i omów z nami usługę której oczekujesz, z przyjemnością ci doradzimy!
              </p>
            </div>

            <div class="button-wrap--rev">
              <a class="button p--buttons" href="../about-us.html">
                SPRAWDŹ NASZĄ OFERTĘ
              </a>
            </div>
          </div>

          <div class="offer__heading">
            <h1 class="underline--left-section-offer heading">OFERTA</h1>
             <div class="triangles"></div>
          </div>
        </div>
      </section> <!-- End of OFFER Section -->

      <section class="container-contact">
        <div class="wrapper wrapper__home-contact w-85">
          <div class="triangles-contact"></div>
          <div class="contact__form">
            <div class="contact__form-heading">
              <h1 class="underline--left-section-offer heading">KONTAKT</h1>
            </div>
            <form class="contact__form-styling"> <!-- Contact Form -->
              <div class="double-label">
                <label for="name">
                  <input type="text" id="name" name="user_name" placeholder="Imię" class="half-width">
                  <abbr title="required" aria-label="required"></abbr>
                </label>
                <label for="surname">
                  <input type="text" id="surname" name="user_surname" placeholder="Nazwisko" class="half-width">
                </label>
              </div>
              <div>
                <label for="mail">
                  <input type="mail" id="mail" name="user_mail" placeholder="Adres e-mail" class="full-width">
                  <abbr title="required" aria-label="required"></abbr>
                </label>
              </div>
              <div>
                <label for="message">
                  <input type="text" id="message" name="user_message" placeholder="Wiadomość" class="full-width">
                </label>
              </div>
              <div class="form-rodo">
                <input type="checkbox" id="rodo1" name="rodo" class="form-rodo__checkbox">
                <label for="rodo">Zgadzam się na przetwarzanie moich danych osobowych zgodnie z <strong>polityką prywatności.</strong></label>
              </div>
              <div>
                <input type="button" value="WYŚLIJ" class="button">
              </div>
            </form> <!-- End of Contact Form -->
          </div>
        </div>
      </section>

    </main> <!-- End of Sections -->

<?php
  include 'footer.php';
?>
