  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?= $_GLOBAL["publicURL"]; ?>">
          <strong><img src="<?= $_GLOBAL["publicURL"]; ?>/public/images/logo.png" class="img-fluid" width="75" alt="Logo"></strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav smooth-scroll">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" data-target="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$data["langData"]["about_phca"]?></a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#"><?=$data["langData"]["greeting_from_founder"]?></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$data["langData"]["the_education_programmes"]?></a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="overview_programs_at_phca/"><?=$data["langData"]["summary_text"]?></a>
                <a class="dropdown-item" href="#"><?=$data["langData"]["music_program"]?></a>
                <a class="dropdown-item" href="#"><?=$data["langData"]["dancing_program"]?></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?=$data["langData"]["online_academy"]?></a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#"><?=$data["langData"]["summary_text"]?></a>
                <a class="dropdown-item" href="#"><?=$data["langData"]["online_music_program"]?></a>
                <a class="dropdown-item" href="#"><?=$data["langData"]["online_dancing_program"]?></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?=$data["langData"]["contact_text"]?></a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#"><?=$data["langData"]["coporation_contact_text"]?></a>
                <a class="dropdown-item" href="#"><?=$data["langData"]["study_contact_text"]?></a>
              </div>
            </li>
            <li class="nav-item">
              <a href="?lang=vi" class="nav-link"><img src="<?= $_GLOBAL["publicURL"]; ?>/public/images/flags/vi.png"></a>
            </li>
            <li class="nav-item">
              <a href="?lang=en" class="nav-link"><img src="<?= $_GLOBAL["publicURL"]; ?>/public/images/flags/en.png"></a>
            </li>
          </ul>

          <!--Social Icons-->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Navbar-->

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