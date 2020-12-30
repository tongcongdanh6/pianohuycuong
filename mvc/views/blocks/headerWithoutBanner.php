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
  </header>
  <!--Navigation & Intro-->