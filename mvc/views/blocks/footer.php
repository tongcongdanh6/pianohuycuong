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