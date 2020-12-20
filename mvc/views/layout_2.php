<?php
$_GLOBAL["publicURL"] = "http://" . $_SERVER["HTTP_HOST"] . "/pianohuycuong";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
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
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Về PHCM &amp; PAA</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Lời chào mừng từ Nhà Sáng Lập</a>
                <a class="dropdown-item" href="#">Brochure</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chương trình giáo dục</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Tổng quan</a>
                <a class="dropdown-item" href="#">Chương trình âm nhạc</a>
                <a class="dropdown-item" href="#">Chương trình vũ đạo</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Học viện trực tuyến</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Tổng quan</a>
                <a class="dropdown-item" href="#">Chương trình âm nhạc Online</a>
                <a class="dropdown-item" href="#">Chương trình vũ đạo Online</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hoạt động tại trường</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Hoạt động cộng đồng</a>
                <a class="dropdown-item" href="#">Chương trình ngoại khóa</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liên hệ</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Liên hệ hợp tác</a>
                <a class="dropdown-item" href="#">Liên hệ học tập</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#vi" class="nav-link"><img src="<?= $_GLOBAL["publicURL"]; ?>/public/images/flags/vi.png"></a>
            </li>
            <li class="nav-item">
              <a href="#en" class="nav-link"><img src="<?= $_GLOBAL["publicURL"]; ?>/public/images/flags/en.png"></a>
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
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('<?= $_GLOBAL["publicURL"]; ?>/public/images/mdb/67.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-strong">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row smooth-scroll">
            <div class="col-md-12 white-text text-center">
              <div class="wow fadeInDown" data-wow-delay="0.2s">
                <h2 class="display-3 font-weight-bold mb-2">PHC Music & Performing Arts Academy</h2>
                <hr class="hr-light">
                <h3 class="subtext-header mt-4 mb-5">Lời giới thiệu ...</h3>
              </div>
              <a href="#events" data-offset="100" class="btn btn-info wow fadeInLeft" data-wow-delay="0.2s">Sự kiện</a>
              <a href="#top-courses" data-offset="100" class="btn btn-warning wow fadeInRight" data-wow-delay="0.2s">Các chương trình đào tạo</a>

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
        <h2 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Giới thiệu PHC Music & Performing Arts Academy</h2>

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
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione
              quisquam, dicta
              ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.
            </p>

            <p align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores error fugiat porro omnis sequi, voluptatibus officia voluptatum! Aspernatur officiis obcaecati accusamus eius ullam officia, dolore labore, vitae veniam quasi temporibus.</p>

            <ul>
              <li>Lorem ipsum dolor sit amet consectetur.</li>
              <li>Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
            </ul>

          </div>
          <!--Second column-->

        </div>
        <!--First row-->

      </section>
      <!--Section: About-->

      <hr>

      <!--Projects section v.3-->
      <section id="info" class="mt-4 mb-5 pb-4">

        <!--Section heading-->
        <h2 class="text-center mb-5 font-weight-bold pt-5 pb-4 my-5 wow fadeIn" data-wow-delay="0.2s">Sự kiện / Tin tức</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.2s">Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <!--First row-->
        <div class="row wow fadeIn" data-wow-delay="0.4s">

          <!--First column-->
          <div class="col-md-12">

            <div class="mb-2">

              <!--Nav tabs-->
              <ul class="nav md-pills pills-primary d-flex justify-content-center" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel31" role="tab">
                    <i class="fas fa-graduation-cap fa-2x"></i>
                    <br> Sự kiện</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel32" role="tab">
                    <i class="fas fa-users fa-2x"></i>
                    <br> Tin tức</a>
                </li>
              </ul>

            </div>

            <!--Tab panels-->
            <div class="tab-content">

              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="panel31" role="tabpanel">

                <!--First row-->
                <div class="row mb-5 pb-3">

                  <!--Grid column-->
                  <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

                    <!--Card Light-->
                    <div class="card h-100">
                      <!--Card image-->
                      <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/51.jpg" class="card-img-top" alt="">
                        <a>
                          <div class="mask rgba-white-slight"></div>
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
                  <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

                    <!--Card Light-->
                    <div class="card h-100">
                      <!--Card image-->
                      <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/40.jpg" class="card-img-top" alt="">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!--/.Card image-->
                      <!--Card content-->
                      <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title darkgrey-text">
                          <strong>Học tại PHCM & PAA</strong>
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
                  <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

                    <!--Card Light-->
                    <div class="card h-100">
                      <!--Card image-->
                      <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Others/images/56.jpg" class="card-img-top" alt="">
                        <a>
                          <div class="mask rgba-white-slight"></div>
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

                <div class="row">
                  <div class="col">
                    <nav>
                      <ul class="pagination pg-dark justify-content-center">
                        <li class="page-item">
                          <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                          <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!--First row-->

              </div>
              <!--Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="panel32" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2840%29.jpg" class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                    <!--Title-->
                    <h4 class="mb-5">Information for Candidates</h4>

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 2-->

              <!--Panel 3-->
              <div class="tab-pane fade" id="panel33" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2841%29.jpg" class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                    <!--Title-->
                    <h4 class="mb-5">Financial Aid</h4>

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 3-->

              <!--Panel 4-->
              <div class="tab-pane fade" id="panel34" role="tabpanel">
                <br>

                <!--First row-->
                <div class="row">

                  <!--First column-->
                  <div class="col-lg-5 col-md-12">

                    <!--Featured image-->
                    <div class="view overlay z-depth-1 mb-2">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2842%29.jpg" class="rounded img-fluid" alt="sample image">
                    </div>
                  </div>
                  <!--First column-->

                  <!--Second column-->
                  <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

                    <!--Title-->
                    <h4 class="mb-5">Residential Life</h4>

                    <!--Description-->
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                      ratione
                      quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                      eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                      perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                      possimus in hic molestias repellendus illo ullam odit quia velit.</p>

                  </div>
                  <!--Second column-->
                </div>
                <!--First row-->

              </div>
              <!--Panel 4-->

            </div>
            <!--Tab panels-->

          </div>
          <!--First column-->

        </div>
        <!--First row-->

      </section>
      <!--Projects section v.3-->

    </div>

    <!--Streak-->
    <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">
      <div class="flex-center mask rgba-indigo-strong">
        <div class="text-center white-text">
          <h2 class="h2-responsive mb-5">
            <i class="fas fa-quote-left" aria-hidden="true"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, non tempora. Accusamus?
            <i class="fas fa-quote-right" aria-hidden="true"></i>
          </h2>
          <h5 class="text-center font-italic " data-wow-delay="0.2s">~ Author</h5>
        </div>
      </div>
    </div>
    <!--Streak-->


    <div class="container-fluid background-r">
      <div class="container py-3">

        <!--Section: Blog v.2-->
        <section class="extra-margins text-center" id="top-courses">
          <h2 class="text-center mb-5 my-5 pt-4 pb-4 font-weight-bold"> Chương trình giảng dạy</h2>

          <!--Grid row-->
          <div class="row mb-5 pb-3">

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card h-100">
                <!--Card image-->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/51.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
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
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card h-100">
                <!--Card image-->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/40.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong>Học tại PHCM & PAA</strong>
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
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card Light-->
              <div class="card h-100">
                <!--Card image-->
                <div class="view overlay">
                  <img src="https://mdbootstrap.com/img/Photos/Others/images/56.jpg" class="card-img-top" alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
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
        <h2 class="text-center mb-5 my-5 pt-5 pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">Học viên nói gì về chúng tôi?</h2>

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
          <i class="fas fa-graduation-cap fa-4x orange-text"></i>
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
            <h5 class="text-uppercase mb-3 font-weight-bold">Bài viết mới</h5>

            <ul class="footer-posts list-unstyled">
              <li>
                <a>Lorem ipsum dolor sit amet.</a>
                <span>
                  <p class="grey-text">28 july 2016</p>
                </span>
              </li>
              <li>
                <a>Lorem ipsum dolor sit amet.</a>
                <span>
                  <p class="grey-text">27 july 2016</p>
                </span>
              </li>
              <li>
                <a>Lorem ipsum dolor sit amet consectetur.</a>
                <span>
                  <p class="grey-text">26 july 2016</p>
                </span>
              </li>
              <li>
                <a>Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                <span>
                  <p class="grey-text">25 july 2016</p>
                </span>
              </li>
            </ul>

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
        Bản quyền © 2021 thuộc về: <a href="<?= $_GLOBAL["publicURL"] ?>" target="_blank"> PHC Music & Performing Arts Academy </a>. Thiết kế bởi: <strong>TCD Team</strong>
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