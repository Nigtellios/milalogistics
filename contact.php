<?php
  include 'header.php';
?>

<main> <!-- Sections -->

  <section class="container-contact-page">

      <div class="wrapper-2col w-85 cont-fill">

        <div class="contact__content">
          <div id="contact-form" class="contact__form">
            <div class="contact__form-heading">
              <h1 class="underline--left-section-contact heading">KONTAKT</h1>
            </div>

            <?php
              include 'form.php';
            ?>

          </div>
        </div>

        <div class="contact__form-heading">
          <h1 class="underline--left-section-contact-page heading">INFO</h1>
          <div class="contact__form-info">

            <div class="info__boxes">
              <div class="info-box__1">
                <p>Mila Logistics</p>
                <p>NIP: 9580909423</p>
              </div>
              <div class="info-box__2">
                <p>ul. Wschodnia 8</p>
                <p>84-241 Gościcino</p>
              </div>
            </div>

            <div class="info__details">
              <a class="info" href="tel:+48535244658"><i><img src="/media/phone-icon.svg" width="27px" height="27px" alt="Zadzwoń do nas"></i><p>+48 535 244 658</p></a>
              <a class="info" href="mailto:kontakt@milalogistics.pl"><i><img src="/media/envelope.svg" width="27px" height="27px" alt="Zadzwoń do nas"></i><p>kontakt@milalogistics.pl</p></a>
            </div>

          </div>
        </div>

      </div>
    </section>
</main> <!-- End of Sections -->

<?php
  include 'footer.php';
?>