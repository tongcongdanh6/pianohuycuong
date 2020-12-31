<?php
// $_GLOBAL["publicURL"] = "http://" . $_SERVER["HTTP_HOST"] . "/pianohuycuong";
$_GLOBAL["publicURL"] = "http://" . $_SERVER["HTTP_HOST"];
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
  <?php require_once "./mvc/views/blocks/header.php" ?>

  <?php require_once "./mvc/views/pages/".$data["page"] ?>

  <?php require_once "./mvc/views/blocks/footer.php" ?>

  <!--SCRIPTS-->

  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/jquery-3.4.1.min.js"></script>

  <!--Bootstrap tooltips-->
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/popper.min.js"></script>

  <!--Bootstrap core JavaScript-->
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/bootstrap.min.js"></script>

  <!--MDB core JavaScript-->
  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/vendors/mdb/js/mdb.min.js"></script>

  <script src="<?= $_GLOBAL["publicURL"]; ?>/public/js/phc.script.js"></script>

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