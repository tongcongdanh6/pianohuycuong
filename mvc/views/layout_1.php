<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $data["pageTitle"];?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,bold" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,bold" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/vendors/bootstrap-4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/vendors/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="../public/css/phc-music-academy.css">
  </head>
  <body>

    <!-- NAV -->

    <div id="wrapper-navbar">
        <div id="top-sidebar" class="container-fluid">
            <div class="container d-flex justify-content-end" style="height: inherit">
                <div class="top-sidebar-cell"><strong>PHC Music & Performing Arts Academy</strong></div>
                <div class="top-sidebar-cell"><img src="../public/images/flags/vi.png" class="img-fluid"> | <img src="../public/images/flags/en.png"></div>
                <div class="top-sidebar-cell">Liên hệ</div>
                <div class="top-sidebar-cell">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-youtube"></i>
                </div>
                <div class="top-sidebar-cell">
                    <form method="get" id="searchform" action="../Search" role="search">
                        <label class="sr-only" for="s">Search</label>
                        <div class="input-group">
                            <input class="field form-control" id="searchKeyword" name="searchKeyword" type="text" placeholder="Search …" value="">
                            <span class="input-group-append">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="../public/images/logo.png" width="80"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-uppercase" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Về PHCM & PAA</a>
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
                    </ul>
                </div>
            </nav>
            </div>
        </div>
    </div>

    <!-- ./NAV -->

    <section class="container-fluid" id="banner">
        <div class="row">
        <div id="carouselId" class="carousel slide m-0 p-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="../public/images/banner/banner2.jpg" class="img-fluid" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </section>

    <section class="container-fluid caption py-5">
        <div class="row justify-content-center">
            <h3 class="caption-1 text-uppercase">
                Các chương trình giáo dục
            </h3>
        </div>
    </section>

    <section class="container-fluid">
        <div class="row">
            <div class="col program-item">asdasd</div>
            <div class="col program-item">asdasd</div>
            <div class="col program-item">asdasd</div>
        </div>
    </section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../public/vendors/jquery-3.5.1/jquery-3.5.1.min.js"></script>
    <script src="../public/vendors/bootstrap-4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>