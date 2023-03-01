<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="img/febicon.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- font awsome -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/a274cf2373.css" crossorigin="anonymous">

  <!-- our css -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="responsiv.css">
  <!-- oul slider css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- google font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- google icon -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <!-- navbar start -->
<div style="position: -webkit-sticky;
 position: sticky;
 top: 0; z-index: 3;" id="nav-bar">
    <nav class="navbar navbar-expand-lg   text-uppercase navbar-light bg-light">
      <div class="container  ">
        <a href="index.html"> <img style="margin-right: 0%; padding: 1%;" id="logo-img" src="img/logo (1).png"
            alt="logo"></a>
        <button style="border: 1px solid #27AAE1; " class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span style="color: #1c75bc;" class="navbar-toggler-icon"></span>
        </button>
        <div style="margin-left: 3%;" class="collapse navbar-collapse nav-text-font-size" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="all-store.html">All Stores</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active " href="letest-store.html" tabindex="-1" aria-disabled="true">Todays Deals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " href="Hot.html" tabindex="-1" aria-disabled="true">Top Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " href="coupons.html" tabindex="-1" aria-disabled="true">Coupons</a>
            </li>
          </ul>

          <form id="form" class="d-flex box" role="search">
            <input type="search" id="query" name="q" aria-label="Search through site content">
            <a href=""><i style="color:  rgb(171, 171, 171);" class="fa-solid fa-magnifying-glass"></i></a>


          </form>
          <button class="btn  btn-light text-uppercase "
            style="font-weight: 1000; font-size: 12px; padding: 0px; margin-right: 1%;" type="button"><a
              style="color: black;" href="sighinpage.html">Sign in</a> </button>
          <button class="btn  btn-info-1 text-uppercase rounded-pill " style="font-weight: 1000; font-size: 12px; "
            type="button"><a href="sighup.html"> Register</a></button>
        </div>
      </div>
    </nav>
  </div>
  <!-- navbar end -->






<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a274cf2373.js" crossorigin="anonymous"></script>
  <!-- j quary cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- owl cds for slidin -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    // for slider
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
    // coupn hide show button
    function show() {

      var x = document.getElementById("hide-copn");
      if (x.style.display === "none") {

        x.style.display = "block";
        document.getElementById("arrow").innerHTML = "arrow_upward";
      } else {
        x.style.display = "none";
        document.getElementById("arrow").innerHTML = "arrow_downward";
      }
    }
    // ##################for popup
    let imgheight = screen.height;
    let imgwidth = screen.width;

    if (imgwidth <= 763 && imgheight <= 953) {
      document.getElementById("form-img").style.display = "none";
      document.getElementById("logo-img").style.width = "40%"
    }
    else {
      document.getElementById("form-img").style.display = "block";
    }
    window.addEventListener("load", function () {
      setTimeout(
        function open(event) {
          document.querySelector(".popup").style.display = "block";
        },
        3000
      )
    });


    document.querySelector("#close").addEventListener("click", function () {
      document.querySelector(".popup").style.display = "none";
    });
  </script>
</body>
</html>