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

<header>
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="navId">
  <li class="nav-item">
    <a href="#tab1Id" class="nav-link active">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#tab2Id">Action</a>
      <a class="dropdown-item" href="#tab3Id">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#tab4Id">Action</a>
    </div>
  </li>
  <li class="nav-item">
    <a href="#tab5Id" class="nav-link">Another link</a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link disabled">Disabled</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
  <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
  <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
  <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
  <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<script>
  // $('#navId a').click(e => {
  //   e.preventDefault();
  //   $(this).tab('show');
  // });
</script>
</header>



  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/jquery-3.4.1.min.js"></script>
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/popper.min.js"></script>
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/bootstrap.min.js"></script>
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/js/mdb.js"></script>

  <script>
    //Animation init
    new WOW().init();

    //Modal
    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').focus()
    })

    // Material Select Initialization
    $(document).ready(function() {
      // $('.mdb-select').material_select();


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