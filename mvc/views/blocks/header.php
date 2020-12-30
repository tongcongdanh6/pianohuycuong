  <!--Navigation & Intro-->
  <header>
    <?php require_once "./mvc/views/blocks/navigation.php"?>
    
    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('<?= $_GLOBAL["publicURL"]; ?>/public/images/background/bg2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row smooth-scroll">
            <div class="col-md-12 white-text text-center">
              <div class="wow fadeInDown" data-wow-delay="0.2s">
                <h2 class="display-3 font-weight-bold mb-2"><?=$data["langData"]["pageTitle"]?></h2>
                <hr class="hr-light">
                <h3 class="subtext-header mt-4 mb-5">
                  <?=$data["langData"]["intro_in_banner_text"]?>
                </h3>
              </div>
              <a href="#our-teachers" data-offset="100" class="btn btn-info wow fadeInLeft" data-wow-delay="0.2s"><?=$data["langData"]["our_teachers_btn_text"]?></a>
              <a href="#top-courses" data-offset="100" class="btn btn-warning wow fadeInRight" data-wow-delay="0.2s"><?=$data["langData"]["our_courses_btn_text"]?></a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Navigation & Intro-->