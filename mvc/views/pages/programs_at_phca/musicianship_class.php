<main>
  <div class="container-fluid py-5 cloudy-knoxville-gradient">

    <!-- Section: About 1 -->
    <section class="mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">

      <!-- Grid row -->
      <div class="row pt-2 mt-lg-5">

        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
          <!-- Image -->
          <img src="<?= $_GLOBAL["publicURL"] ?>/public/images/programs_at_phca/musicianship-class.jpg" class="img-fluid z-depth-4">

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6 ml-auto col-md-12 px-5 py-5 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

          <!-- Secion heading -->
          <h2 class="mb-5 title font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
            <strong class="text-uppercase"><?= $data["langData"]["musicianship_class_header_text"] ?></strong>
          </h2>

          <!-- Description -->
          <p align="justify"><?= $data["langData"]["musicianship_class_content_text_1"] ?></p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Section: About 1 -->

  </div>


  <div class="container pt-5">
    <div class="row wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
      <div class="col-lg-6 col-md-6">
        <span class="h2 text-shadow-blue text-uppercase"><?= $data["langData"]["learning_objectives_text"] ?></span>
      </div>

      <div class="col-lg-6 col-md-6">
        <p class="text-justify">
          <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> 
          <?= $data["langData"]["musicianship_class_content_text_2"] ?>
        </p>
        <p class="text-justify">
          <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> 
          <?= $data["langData"]["musicianship_class_content_text_3"] ?>
        </p>
        <p class="text-justify">
          <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> 
          <?= $data["langData"]["musicianship_class_content_text_4"] ?>
        </p>
        <p class="text-justify">
          <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> 
          <?= $data["langData"]["musicianship_class_content_text_5"] ?>
        </p>
        <p class="text-justify">
          <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> 
          <?= $data["langData"]["musicianship_class_content_text_6"] ?>
        </p>

      </div>
    </div>    
    
    <div class="row pt-5 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
      <div class="col-lg-6 col-md-6">
        <span class="h2 text-shadow-blue text-uppercase"><?= $data["langData"]["learning_outcomes_text"] ?></span>
      </div>

      <div class="col-lg-6 col-md-6">
        <div>
          <p class="text-justify">
            <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> 
            <?= $data["langData"]["musicianship_class_content_text_7"] ?>
          </p>        
          <p class="text-justify">
            <i class="fas fa-long-arrow-alt-right orange-text mr-2" aria-hidden="true"></i> 
            <?= $data["langData"]["musicianship_class_content_text_8"] ?>
          </p>       
        </div>

      </div>
    </div>
  </div>

  <?php require_once "./mvc/views/pages/programs_at_phca/music_classes.php"?>
</main>