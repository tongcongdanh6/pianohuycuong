<?php
$_GLOBAL["publicURL"] = "http://" . $_SERVER["HTTP_HOST"] . "/pianohuycuong";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?=$data["langData"]["pageTitle"]?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel='stylesheet' id='gdlr-core-google-font-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&#038;subset=devanagari%2Clatin%2Clatin-ext&#038;ver=5.5.3' type='text/css' media='all' />
  <link rel='stylesheet' id='gdlr-core-google-font-css' href='http://fonts.googleapis.com/css?family=Spicy+Rice%3A400&ver=5.1.8' type='text/css' media='all' />
  <link rel="icon" href="<?= $_GLOBAL["publicURL"]; ?>/public/icon.ico" sizes="16x16" type="image/png">
  <!-- Bootstrap core CSS -->
  <link href="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/css/mdb.min.css" rel="stylesheet">

  <link href="<?= $_GLOBAL["publicURL"]; ?>/public/css/phc-music-academy-layout2.css" rel="stylesheet">
  <style>
    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }

    @media (min-width: 560px) and (max-width: 740px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2A48 !important;
      }

      .navbar {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12) !important;
      }
    }
  </style>
</head>

<body class="university-lp">
  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
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
                <a class="dropdown-item" href="#"><?=$data["langData"]["summary_text"]?></a>
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

  <!--Main content-->
  <main>

    <div class="container">

      <!--Section: About-->
      <section id="about" class="mt-4 mb-2">

        <!--Secion heading-->
        <h2 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s"><?=$data["langData"]["introducing_header"]?></h2>

        <!--First row-->
        <div class="row">

          <!--First column-->
          <div class="col-lg-5 col-md-12 mb-5 pb-4 wow fadeIn" data-wow-delay="0.4s">

            <!--Image-->
            <img src="<?= $_GLOBAL["publicURL"]; ?>/public/images/mdb/img_1.jpg" class="img-fluid z-depth-1 rounded" alt="My photo">

          </div>
          <!--First column-->

          <!--Second column-->
          <div class="col-lg-6 dark-grey-text ml-lg-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

            <!--Description-->
            <p align="justify"><?=$data["langData"]["introducing_line_1"]?></p>
            <p align="justify"><?=$data["langData"]["introducing_line_2"]?></p>
            <p align="justify"><?=$data["langData"]["introducing_line_3"]?></p>
            <p align="justify"><?=$data["langData"]["introducing_line_4"]?></p>
            <p align="justify"><?=$data["langData"]["introducing_line_5"]?></p>

          </div>
          <!--Second column-->

        </div>
        <!--First row-->

      </section>
      <!--Section: About-->
    </div>

    <section class="container-fluid" id="our-teachers" style="
    background: linear-gradient(45deg, rgba(29, 236, 197, 0.5),rgba(91, 14, 214, 0.5) 100%);">
      <section class="container">
        <div class="row">
          <div class="col-sm-12 vc_column_container">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="es-resp">
                  <div class="hidden-sm hidden-ms hidden-xs" style="height: 8px;">
                  </div>
                  <div class="hidden-xl hidden-lg hidden-md hidden-xs" style="height: 8px;"></div>
                  <div class="visible-xs" style="height: 0px;"></div>
                </div>
                <div class="heading  head-subheader align-center color-black subcolor-second transform-default" id="like_sc_header_1052999607">
                  <h2 class="header" style="font-family: Roboto, sans-serif;"><?=$data["langData"]["our_experienced_teachers"]?></h2>
                </div>
                <div class="mb-5">
                  <div class="wpb_wrapper">
                    <p style="text-align: center;"><span class="text-md">
                    <?=$data["langData"]["content_experienced_teachers"]?>
                    </span>
                    </p>
                  </div>
                </div>
                <div class="es-resp">
                  <div class="hidden-sm hidden-ms hidden-xs" style="height: 32px;">
                  </div>
                  <div class="hidden-xl hidden-lg hidden-md hidden-xs" style="height: 32px;"></div>
                  <div class="visible-xs" style="height: 32px;"></div>
                </div>
                <div class="team-sc row">
                  <div class="col-md-3 col-sm-6">
                    <div class="team-item item matchHeight item-type-circle " style="visibility: visible; transform: translateY(0px) scale(1); opacity: 1; transition: all 0.3s ease 0s; height: 320px;" data-sr-id="26"><a href="#" class="image"><img width="1200" height="1200" src="<?= $_GLOBAL["publicURL"]; ?>/public/images/teachers/ly_huynh_long.jpg" class="attachment-full size-full" alt="" srcset="<?= $_GLOBAL["publicURL"]; ?>/public/images/teachers/ly_huynh_long.jpg 1200w, <?= $_GLOBAL["publicURL"]; ?>/public/images/teachers/ly_huynh_long.jpg 150w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w3-300x300.jpg 300w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w3-768x768.jpg 768w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w3-1024x1024.jpg 1024w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w3-600x600.jpg 600w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w3-100x100.jpg 100w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w3-75x75.jpg 75w" sizes="(max-width: 1200px) 100vw, 1200px"></a><a href="http://notacorda.like-themes.com/team/courtney-lee/">
                        <h4><?=$data["langData"]["teachers"][0][0]?></h4>
                      </a>
                      <p><?=$data["langData"]["department"][$data["langData"]["teachers"][0][1]]?></p>
                      <div class="social">
                        <ul>
                          <li><a href="#"><span class="fa fa-google-plus"></span></a>
                          </li>
                          <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                          <li><a href="#"><span class="fa fa-facebook-f"></span></a>
                          </li>
                          <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                          <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="team-item item matchHeight item-type-circle " style="visibility: visible; transform: translateY(0px) scale(1); opacity: 1; transition: all 0.3s ease 0s; height: 320px;" data-sr-id="27"><a href="#" class="image"><img width="1200" height="1200" src="<?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg" class="attachment-full size-full" alt="" srcset="<?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 1200w, <?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 150w, <?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 300w, <?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 768w, <?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 1024w, <?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 600w, <?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 100w, <?=$_GLOBAL['publicURL']?>/public/images/teachers/huy_cuong.jpg 75w" sizes="(max-width: 1200px) 100vw, 1200px"></a><a href="#">
                        <h4><?=$data["langData"]["teachers"][1][0]?></h4>
                      </a>
                      <p><?=$data["langData"]["department"][$data["langData"]["teachers"][1][1]]?></p>
                      <div class="social">
                        <ul>
                          <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                          <li><a href="#"><span class="fa fa-facebook-f"></span></a>
                          </li>
                          <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                          <li><a href="#"><span class="fa fa-google-plus"></span></a>
                          </li>
                          <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="team-item item matchHeight item-type-circle " style="visibility: visible; transform: translateY(0px) scale(1); opacity: 1; transition: all 0.3s ease 0s; height: 320px;" data-sr-id="28"><a href="http://notacorda.like-themes.com/team/francis-habbant/" class="image"><img width="1200" height="1200" src="http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1.jpg" class="attachment-full size-full" alt="" srcset="http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1.jpg 1200w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1-150x150.jpg 150w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1-300x300.jpg 300w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1-768x768.jpg 768w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1-1024x1024.jpg 1024w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1-600x600.jpg 600w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1-100x100.jpg 100w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w1-75x75.jpg 75w" sizes="(max-width: 1200px) 100vw, 1200px"></a><a href="http://notacorda.like-themes.com/team/francis-habbant/">
                        <h4>Francis Habbant</h4>
                      </a>
                      <p>Guitar teacher</p>
                      <div class="social">
                        <ul>
                          <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                          <li><a href="#"><span class="fa fa-facebook-f"></span></a>
                          </li>
                          <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                          <li><a href="#"><span class="fa fa-google-plus"></span></a>
                          </li>
                          <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="team-item item matchHeight item-type-circle " style="visibility: visible; transform: translateY(0px) scale(1); opacity: 1; transition: all 0.3s ease 0s; height: 320px;" data-sr-id="29"><a href="http://notacorda.like-themes.com/team/marta-ferrari/" class="image"><img width="1200" height="1200" src="http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2.jpg" class="attachment-full size-full" alt="" srcset="http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2.jpg 1200w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2-150x150.jpg 150w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2-300x300.jpg 300w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2-768x768.jpg 768w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2-1024x1024.jpg 1024w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2-600x600.jpg 600w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2-100x100.jpg 100w, http://notacorda.like-themes.com/wp-content/uploads/2017/10/w2-75x75.jpg 75w" sizes="(max-width: 1200px) 100vw, 1200px"></a><a href="http://notacorda.like-themes.com/team/marta-ferrari/">
                        <h4>Marta Ferrari</h4>
                      </a>
                      <p>Vocal teacher</p>
                      <div class="social">
                        <ul>
                          <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                          <li><a href="#"><span class="fa fa-facebook-f"></span></a>
                          </li>
                          <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btn-wrap align-center mb-5"><a href="" class="btn btn-primary transform-default color-text-white color-hover-second align-center text-uppercase vc_custom_1507758207859" id="like_sc_button_1951161547"><?=$data["langData"]["viewall_btn_text"]?></a></div>
                <!-- <div class="es-resp">
                  <div class="hidden-sm hidden-ms hidden-xs" style="height: 80px;">
                  </div>
                  <div class="hidden-xl hidden-lg hidden-md hidden-xs" style="height: 80px;"></div>
                  <div class="visible-xs" style="height: 40px;"></div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>

    </section>

    <div class="container-fluid background-r">
      <div class="container py-3">

        <!--Section: Blog v.2-->
        <section class="extra-margins text-center" id="top-courses">
          <h2 class="text-center mb-5 my-5 pt-4 pb-4 font-weight-bold"><?=$data["langData"]["education_programs_section_header"]?></h2>

          <!--Grid row-->
          <div class="row mb-5 pb-3">

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.2s">

              <!--Card Light-->
              <div class="card h-100">
                <!--Card image-->
                <div class="view overlay">
                  <img src="<?=$_GLOBAL['publicURL']?>/public/images/courses/online-program.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask mask-gradient-blue"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Học trực tuyến</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ex.
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Xem thêm
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.2s">

              <!--Card Light-->
              <div class="card h-100">
                <!--Card image-->
                <div class="view overlay">
                  <img src="<?=$_GLOBAL['publicURL']?>/public/images/courses/piano1.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask mask-gradient-blue"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Học tại PHCA</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, sed eligendi.
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Xem thêm
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.2s">

              <!--Card Light-->
              <div class="card h-100">
                <!--Card image-->
                <div class="view overlay">
                  <img src="<?=$_GLOBAL['publicURL']?>/public/images/courses/guitar1.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask mask-gradient-blue"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Đặc biệt</strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rem dignissimos ad!
                  </p>
                  <a href="#" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Xem thêm
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->
            <!--Grid column-->

          </div>
          <!--First row-->

        </section>
        <!--Section: Blog v.2-->

      </div>
    </div>

    <div class="container">

      <section id="testimonials" class="mb-5">

        <!--Section heading-->
        <h2 class="text-center mb-5 my-5 pt-5 pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Mọi người nói gì về chúng tôi?</h2>

        <div class="row">

          <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
              <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
              </a>
              <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="next">
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>
            <!--Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#multi-item-example" data-slide-to="0" class="active light-blue darken-4"></li>
              <li data-target="#multi-item-example" data-slide-to="1" class="light-blue darken-4"></li>
              <li data-target="#multi-item-example" data-slide-to="2" class="light-blue darken-4"></li>
            </ol>
            <!--Indicators-->

            <!--Slides-->
            <div class="carousel-inner text-center" role="listbox">

              <!--First slide-->
              <div class="carousel-item active">
                <!--Grid column-->
                <div class="col-md-4">

                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Anna Deynah</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                      eos id officiis
                      hic tenetur.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star-half-alt"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">John Doe</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                      corporis suscipit
                      laboriosam.
                    </p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Abbey Clark</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                      esse quam
                      nihil molestiae.</p>

                    <!--Review-->
                    <div class="grey-text mb-3s">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="far fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--First slide-->

              <!--Second slide-->
              <div class="carousel-item">
                <!--Grid column-->
                <div class="col-md-4">

                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Blake Dabney</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                      corporis laboriosam.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star-half-alt"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(6).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Andrea Clay</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                      eos id officiis
                      hic tenetur quae.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Cami Gosse</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                      blanditiis
                      praesentium.
                    </p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="far fa-star"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Second slide-->

              <!--Third slide-->
              <div class="carousel-item">
                <!--Grid column-->
                <div class="col-md-4">

                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Bobby Haley</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                      eos id officiis
                      hic tenetur quae.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Elisa Janson</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                      blanditiis
                      praesentium.
                    </p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star-half-alt"> </i>
                    </div>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 clearfix d-none d-sm-block">
                  <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold">Robert Jacobs</h4>

                    <p>
                      <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                      corporis laboriosam.</p>

                    <!--Review-->
                    <div class="grey-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="far fa-star"> </i>
                    </div>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Third slide-->

            </div>
            <!--Slides-->

          </div>
          <!--Carousel Wrapper-->

        </div>

      </section>

    </div>

  </main>
  <!--Main content-->

  <!--Footer-->
  <footer class="page-footer text-center text-md-left mdb-color darken-3">

    <!--Footer Links-->
    <div class="container-fluid">

      <!--First row-->
      <div class="row " data-wow-delay="0.2s">

        <!--First column-->
        <div class="col-md-12 text-center mb-3 mt-3">

          <!--Icon-->
          <img src="<?= $_GLOBAL["publicURL"]; ?>/public/images/imgaeft.png" class="img-fluid">
          <!--Title-->
          <h2 class="mt-3 mb-3">Gia nhập gia đình PHCM & PAA</h2>
          <!--Description-->
          <p class="white-text mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et
            dolore magna aliqua.</p>
          <!--Reservation button-->
          <a href="#!" class="btn btn-warning">Ứng tuyển</a>
          <a href="#!" class="btn btn-info">Liên hệ hợp tác</a>

        </div>
        <!--First column-->

        <hr class="w-100 mt-4 mb-5">

      </div>
      <!--First row-->

      <div class="container mb-1">

        <!--Second row-->
        <div class="row">

          <!--First column-->
          <div class="col-xl-4 col-lg-4 pt-1 pb-1">
            <!--About-->
            <h5 class="text-uppercase mb-3 font-weight-bold">PHC Music & Performing Arts Academy</h5>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quaerat!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, modi maiores accusantium pariatur beatae neque.</p>
            <!--About-->

            <div class="footer-socials mt-4">

              <!--Facebook-->
              <a type="button" class="btn-floating btn-dark-blue-2">
                <i class="fab fa-facebook-f"></i>
              </a>
              <!--Youtube-->
              <a type="button" class="btn-floating btn-dark-blue-2">
                <i class="fab fa-youtube"></i>
              </a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-dark-blue-2">
                <i class="fab fa-twitter"></i>
              </a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-dark-blue-2">
                <i class="fab fa-google-plus-g"></i>
              </a>

            </div>
          </div>
          <!--First column-->

          <hr class="w-100 clearfix d-lg-none">

          <!--Second column-->
          <div class="col-xl-3 ml-lg-auto col-lg-4 col-md-6 mt-1 mb-1">
            <!--Search-->
            <h5 class="text-uppercase mb-3 font-weight-bold">Tìm kiếm</h5>

            <ul class="footer-search list-unstyled">
              <li>
                <form class="search-form" role="search">
                  <div class="md-form">
                    <input type="text" class="form-control" placeholder="Từ khóa ...">
                  </div>
                </form>
              </li>
            </ul>

            <!--Info-->
            <p>
              <i class="fas fa-home pr-1"></i> Thành Phố Hồ Chí Minh</p>
            <p>
              <i class="fas fa-envelope pr-1"></i> admin@example.com</p>
            <p>
              <i class="fas fa-phone pr-1"></i> + 01 234 567 89</p>
            <p>
              <i class="fas fa-phone pr-1"></i> + 01 222 333 44</p>

          </div>
          <!--Second column-->

          <hr class="w-100 clearfix d-md-none">

          <!--Third column-->
          <div class="col-xl-3 ml-lg-auto col-lg-4 col-md-6 mt-1 mb-1">
            <!--Contact-->
            <h5 class="text-uppercase mb-3 font-weight-bold">Thông tin truy cập</h5>

            <div class="row">
              <div class="col-12">
                Tổng số lượng đã truy cập: <b>1,366,545</b>
              </div>
              <div class="col-12">
                Đang online: <b><?php echo floor(random_int(53, 70))?></b>
              </div>
            </div>

          </div>
          <!--Third column-->

        </div>
        <!--Second row-->

      </div>

    </div>
    <!--Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        <?=$data["langData"]["copyright_text"]?> <a href="<?= $_GLOBAL["publicURL"] ?>" target="_blank"> <?=$data["langData"]["academy_name"]?> </a>
      </div>
    </div>
    <!--Copyright-->

  </footer>
  <!--Footer-->

  <!--SCRIPTS-->

  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/jquery-3.4.1.min.js"></script>

  <!--Bootstrap tooltips-->
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/popper.min.js"></script>

  <!--Bootstrap core JavaScript-->
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/bootstrap.min.js"></script>

  <!--MDB core JavaScript-->
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/mdb.min.js"></script>

  <script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').focus()
    })

    // Material Select Initialization
    $(document).ready(function() {
      $('.mdb-select').material_select();


      // SMOOTH SCROLL
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 2000, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

    });
  </script>

</body>

</html>