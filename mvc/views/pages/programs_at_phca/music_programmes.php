<main>
  <div class="container-fluid py-5 cloudy-knoxville-gradient">

    <!-- Section: About 1 -->
    <section class="mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">

      <!-- Grid row -->
      <div class="row pt-2 mt-lg-5">

        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
          <!-- Image -->
          <img src="<?= $_GLOBAL["publicURL"] ?>/public/images/programs_at_phca/music_programmes.jpg" class="img-fluid">

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6 ml-auto col-md-12 px-5 py-5 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

          <!-- Secion heading -->
          <h2 class="mb-5 title font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
            <strong class="text-uppercase"><?= $data["langData"]["music_programmes_header_text"] ?></strong>
          </h2>

          <!-- Description -->
          <p align="justify"><?= $data["langData"]["music_programmes_content_text_1"] ?></p>
          <p>
            <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i><?= $data["langData"]["music_programmes_content_text_2"] ?>
          </p>
          <p>
            <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> <?= $data["langData"]["music_programmes_content_text_3"] ?>
          </p>
          <p>
            <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> <?= $data["langData"]["music_programmes_content_text_4"] ?>
          </p>
          <p>
            <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> <?= $data["langData"]["music_programmes_content_text_5"] ?>
          </p>
          <p align="justify"><?= $data["langData"]["music_programmes_content_text_6"] ?></p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Section: About 1 -->

  </div>

  <?php require_once "./mvc/views/pages/programs_at_phca/music_classes.php"?>



</main>