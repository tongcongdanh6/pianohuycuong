<!doctype html>
<html lang="en">

<head>
    <title><?php echo $data["pageTitle"]; ?></title>
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
                <div class="top-sidebar-cell" id="search-wrapper">
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
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
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

    <section class="container-fluid" id="programs">
        <div class="row h-100">
            <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center program-item program-item-bg-1">
                <div style="color: #fff" class="program-content">
                    <h2>Chương trình</h2>
                    <h3>TẠI SMPAA</h3>
                    <h4></h4>
                    <a href="#"> >> Xem thêm</a>

                </div>
                <div class="mask-black"></div>
            </div>
            <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center program-item program-item-bg-2">
                <div style="color: #fff" class="program-content">
                    <h2>Chương trình</h2>
                    <h3>TẠI SMPAA</h3>
                    <h4></h4>
                    <a href="#"> >> Xem thêm</a>
                </div>
                <div class="mask-primary"></div>
            </div>
            <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center program-item program-item-bg-3">

                <div style="color: #fff" class="program-content">
                    <h2>Chương trình</h2>
                    <h3>TẠI SMPAA</h3>
                    <h4></h4>
                    <a href="#"> >> Xem thêm</a>

                </div>
                <div class="mask-black"></div>
            </div>
        </div>
    </section>

    <section class="container-fluid py-5" id="events-news">
        <div class="container">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#events">Events</a>
                </li>
                <li>
                    <a class="nav-link" data-toggle="pill">/</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#news">News</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="events" class="container tab-pane active">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 list-post-item">
                            <img src="https://smpaa.edu.vn/wp-content/uploads/2020/10/SMPAA-MASTER-CLASS_GERARD_Website-Banner-scaled.jpg" class="img-fluid">
                            <div class="content">
                                <div class="date">
                                    <a href="https://smpaa.edu.vn/new_event/master-class/">04/12/2020</a>
                                </div>
                                <a class="title" href="https://smpaa.edu.vn/new_event/master-class/">MASTERCLASS</a>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 list-post-item">
                            <img src="https://smpaa.edu.vn/wp-content/uploads/2020/12/SMPAA_ON-THE-MOVE-WORKSHOP_FB-Cover_851x315.jpg" class="img-fluid">
                            <div class="content">
                                <div class="date">
                                    <a href="https://smpaa.edu.vn/new_event/master-class/">04/12/2020</a>
                                </div>
                                <a class="title" href="https://smpaa.edu.vn/new_event/master-class/">MASTERCLASS</a>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 list-post-item">
                            <img src="https://smpaa.edu.vn/wp-content/uploads/2020/11/SMPAA_4P_Web-Banner_1920x1080-1-01-scaled.jpg" class="img-fluid">
                            <div class="content">
                                <div class="date">
                                    <a href="https://smpaa.edu.vn/new_event/master-class/">04/12/2020</a>
                                </div>
                                <a class="title" href="https://smpaa.edu.vn/new_event/master-class/">MASTERCLASS</a>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link previous" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                                    <li class="page-item "><a class="page-link disable" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link next" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>


                <div id="news" class="container tab-pane fade">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 list-post-item">
                            <img src="https://smpaa.edu.vn/wp-content/uploads/2020/10/SMPAA-MASTER-CLASS_GERARD_Website-Banner-scaled.jpg" class="img-fluid">
                            <div class="content">
                                <div class="date">
                                    <a href="https://smpaa.edu.vn/new_event/master-class/">04/12/2020</a>
                                </div>
                                <a class="title" href="https://smpaa.edu.vn/new_event/master-class/">MASTERCLASS</a>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 list-post-item">
                            <img src="https://smpaa.edu.vn/wp-content/uploads/2020/12/SMPAA_ON-THE-MOVE-WORKSHOP_FB-Cover_851x315.jpg" class="img-fluid">
                            <div class="content">
                                <div class="date">
                                    <a href="https://smpaa.edu.vn/new_event/master-class/">04/12/2020</a>
                                </div>
                                <a class="title" href="https://smpaa.edu.vn/new_event/master-class/">MASTERCLASS</a>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 list-post-item">
                            <img src="https://smpaa.edu.vn/wp-content/uploads/2020/11/SMPAA_4P_Web-Banner_1920x1080-1-01-scaled.jpg" class="img-fluid">
                            <div class="content">
                                <div class="date">
                                    <a href="https://smpaa.edu.vn/new_event/master-class/">04/12/2020</a>
                                </div>
                                <a class="title" href="https://smpaa.edu.vn/new_event/master-class/">MASTERCLASS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wrapper" id="wrapper-footer-full-widget">

        <div class="container" id="footer-full-content" tabindex="-1">

            <div class="row">
                <div class="col-md-8">
                    <div id="text-5" class="widget-odd widget-last widget-first widget-1 contact-footer widget widget_text">
                        <div class="textwidget">
                            <p><a href="https://embassyeducation.edu.vn/" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone wp-image-1219 size-medium" src="/wp-content/uploads/2019/08/LogoEmbassy.svg" alt="" width="80" height="70"></a>&nbsp; &nbsp; <a href="https://enpointe.com.vn/" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone wp-image-1176" src="/wp-content/uploads/2019/12/ManagedByEnPointewhite.svg" alt="" width="100" height="68"></a></p>
                            <p style="color: #999999;">© 2019 SMPAA is a member of Embassy Education Group ALL RIGHTS RESERVED</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="text-4" class="widget-even widget-2 contact-footer widget widget_text">
                        <div class="textwidget">
                            <p><b>Soul Music &amp; Performing Arts Academy</b><br>
                                Một thành viên của <b>Embassy Education Group</b><br>
                                Địa chỉ: 214 Pasteur, Phường 6, Quận 3, TP.HCM<br>
                                Điện thoại: <a href="tel:02871017778"><b>0287 1017 778</b></a><br>
                                Website: <a href="http://smpaa.edu.vn"><b>smpaa.edu.vn</b></a></p>
                        </div>
                    </div>
                    <div id="sow-social-media-buttons-2" class="widget-odd widget-last widget-3 widget widget_sow-social-media-buttons">
                        <div class="so-widget-sow-social-media-buttons so-widget-sow-social-media-buttons-atom-00754f84235f">

                            <div class="social-media-button-container">

                                <a class="ow-button-hover sow-social-media-button-facebook-0 sow-social-media-button" title="SMPAA on Facebook" aria-label="SMPAA on Facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/smpaa.edu.vn/">
                                    <span>
                                        <span class="sow-icon-fontawesome sow-fab" data-sow-icon=""></span> </span>
                                </a>

                                <a class="ow-button-hover sow-social-media-button-youtube-0 sow-social-media-button" title="SMPAA on Youtube" aria-label="SMPAA on Youtube" target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/user/SoulEntertainmentMV">
                                    <span>
                                        <span class="sow-icon-fontawesome sow-fab" data-sow-icon=""></span> </span>
                                </a>

                                <a class="ow-button-hover sow-social-media-button-instagram-0 sow-social-media-button" title="SMPAA on Instagram" aria-label="SMPAA on Instagram" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/smpaavietnam/">
                                    <span>
                                        <span class="sow-icon-fontawesome sow-fab" data-sow-icon=""></span> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../public/vendors/jquery-3.5.1/jquery-3.5.1.min.js"></script>
    <script src="../public/vendors/bootstrap-4.1.3/js/bootstrap.min.js"></script>
</body>

</html>