

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts1/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css1/owl.carousel.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css1/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css1/style.css">


    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-574-mexant.css">
    {{-- <link rel="stylesheet" href="../assets/css/owl.css"> --}}
    {{-- <link rel="stylesheet" href="../assets/css/animate.css"> --}}

    <title>Website Menu #5</title>

    <style>
        .hero-carousel {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        .hero-carousel .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .topic {
          position:absolute; 
          /* visibility: visible; */
          opacity: 1; 
          z-index: 1;
          color: #fff;
          font-size: 2.5rem;
          top: 190px;
          left: 290px;
        }

        .box-container {
          position:absolute;
          /* visibility: visible; */
          opacity: 1;
          z-index: 1;
          top: 300px;
          left: 100px;
        }

        .box-wrapper {
          display: flex;
        }

        .box-wrapper li {
          border: 1px solid #fff;
          border-radius: 10px;
          display: flex;
          margin: 20px;
          font-size: 1.3rem;
          padding-left: 60px;
          padding-top: 50px;
          width: 200px;
          height: 150px;
          background-color: #fff;
        }

        .box-wrapper li:hover {
          border: 1px solid #51B3E4;
          background-color: #51B3E4;
          color: #fff;
        }

        @media screen and (max-width: 450px) {
          .topic {
            top: 100px;
            left: 10px;
            font-size: 1.1rem;
            text-align: center;
          }

          .box-container {
            top: 150px;
            left: 85px;
          }

          .box-wrapper {
            display: block;
          }

          .box-wrapper li {
            width: 220px;
            height: 100px;
            font-size: 1rem;
            padding-left: 80px;
            padding-top: 30px;
            text-align: center;
            margin: 8px;
          }

          .box-wrapper li:hover {
            border: 1px solid #51B3E4;
            background-color: #51B3E4;
            color: #fff;
            
          }

          .right-content {
            text-align: center
          }
        }

        .login {
          background-color: #51B3E4;
          color: #fff;
          border-radius: 5px;
        }

        .footer-text{
          font-size: 20px;
        }
        footerLinks-section > p{
          font-size: 14px;
          color: #F5F7FA;
        }
        .footer-input{
          font-size: 14px;
          outline: 0;
          border: 0;
          background-color: #FFFFFF48;
          color: #D9DBE1;
        }
        .footer-input::placeholder{
          color: #FFFFFF7A;
        }
        /* .plane-icon{
          filter: invert(1);
        } */
        .footerInput-container{
          width: fit-content;
        }
        
    </style>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar site-navbar-target py-4" role="banner">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-3">
                    <div class="site-logo">
                        <a href="/" class="font-weight-bold"><img src="../assets/images/Asset4@4x.png" style="width:6.5em" alt=""></a>
                    </div>
                </div>

                <div class="col-9 text-right">
                    <span class="d-inline-block d-lg-block">
                        <a href="#" class="text-black site-menu-toggle js-menu-toggle py-5">
                            <span class="icon-menu h3 text-white"></span>
                        </a>
                    </span>

                    <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto">
                            <li class="active"><a href="/" class="nav-link">Home</a></li>
                            <li><a href="/about-us" class="nav-link">About</a></li>
                            <li><a href="/jobs" class="nav-link">Job</a></li>
                            <li><a href="/contact" class="nav-link">Contact</a></li>
                            <li><a href="/marketing" class="nav-link">Marketing</a></li>
                            <li><a href="/sales" class="nav-link">Sales</a></li>
                            <li><a href="/admin-login" class="nav-link login" style="color: #fff;">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide hero-carousel" data-ride="carousel" data-interval="3000" data-pause="false">
      <h4 class="topic">We produce well refined salts to serve your needs</h4>

    <div class="box-container">
      <ul class="box-wrapper">
          <a href="/"><li>Home</li></a>
          <a href="/about-us"><li>About</li></a>
          <a href="/jobs"><li>Job</li></a>
      </ul>
      <ul class="box-wrapper">
        <a href="/contact"><li>Contact</li></a>
        <a href="/marketing"><li>Marketing</li></a>
        <a href="/sales"><li>Sales</li></a>
      </ul>
    </div>

        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('assets/images/Dernan-logo.jpg');"></div>
            <div class="carousel-item" style="background-image: url('assets/images/BackGround2.jpg');"></div>
            <div class="carousel-item" style="background-image: url('assets/images/BackGround3.jpg');"></div>
        </div>
    </div>

    <section class="about-us" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h4>About the company</h4>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="naccs">
              <div class="tabs">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="menu">
                      <img src="assets/images/salt.png" alt="">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <ul class="nacc">
  
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-content">
              <h4>We are a trusted producers of salt.</h4>
              <p>To be the leading supplier of premium salt products in the global market, recognized for our commitment to quality, sustainability, and community development. We aspire to set the industry standard through innovation, excellence, and ethical practices.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container-lg px-md-4">
        <div class="row justify-content-md-between justify-content-center text-md-start my-5 flex-column flex-md-row text-center">
          <div class="col-lg-4 h-100 d-flex flex-column mx-auto mx-md-0 mb-lg-0 mb-5">
            <a href="/" class="logo">
              <img src="../assets/images/Asset4@4x.png" style="width:130px" alt="">
            </a>
            <p style="font-size: 14px;" class="mt-5">Copyright © 2024 Dernan Co., Ltd.
              <br>All Rights Reserved.
            </p>
          </div>
          <div class="col-lg-7 col-9 d-flex flex-column flex-md-row px-0 justify-content-lg-end mx-auto mx-md-0">
            <div class="col-lg-3 footerLinks-section">
              <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Company</h6>
              <p>About us</p>
              <p>Job</p>
              <p>Contact us</p>
            </div>
            <div class="col-lg-3 footerLinks-section">
              <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Support</h6>
              <p>Help center</p>
              <p>Terms of service</p>
              <p>Legal</p>
            </div>
            <div class="col-lg-4 me-3 me-lg-0">  </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="../assets/js1/jquery-3.3.1.min.js"></script>
    <script src="../assets/js1/popper.min.js"></script>
    <script src="../assets/js1/bootstrap.min.js"></script>
    <script src="../assets/js1/jquery.sticky.js"></script>
    <script src="../assets/js1/main.js"></script>
</body>
</html>

























{{-- <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Dernan Salt Ltd</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

<style>
        .footer-text{
          font-size: 20px;
        }

        footerLinks-section > p{
          font-size: 14px;
          color: #F5F7FA;
        }
        .footer-input{
          font-size: 14px;
          outline: 0;
          border: 0;
          background-color: #FFFFFF48;
          color: #D9DBE1;
        }
        .footer-input::placeholder{
          color: #FFFFFF7A;
        }
        /* .plane-icon{
          filter: invert(1);
        } */
        .footerInput-container{
          width: fit-content;
        }
</style>
  </head>

<body>
 
 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav" role="navigation">
                  <!-- ***** Logo Start ***** -->
                  <a href="/" class="logo">
                      <img src="../assets/images/Asset4@4x.png" style="width:4.5em" alt="">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                      <li class="scroll-to-section"><a wire:navigate href="/">Home</a></li>
                      <li class="scroll-to-section"><a wire:navigate href="/about-us">About</a></li>
                      <li class="scroll-to-section"><a wire:navigate href="/jobs">job</a></li>
                      <li><a wire:navigate href="/contact">Contact</a></li> 
                      <li class="scroll-to-section"><a wire:navigate href="/marketing">Marketing</a></li>
                      <li class="scroll-to-section"><a wire:navigate href="/sales">Sales</a></li>
                      <li class="scroll-to-section"><a wire:navigate href="/admin-login">Login</a></li>
                  </ul>        
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>

<!-- ***** Header Area End ***** -->

<style>
    
  .box-container {
      display: flex;
     
  }

  .box-container li {
      border: 1px solid #fff;
      width: 200px;
      height: 150px;
      padding: 50px;
      margin: 20px;
      text-align: center;
      background-color: #fff;
      border-radius: 20px;
      color: ;
  }

  a li{
      text-decoration: none;
      color: #000;
  }

  a li:hover {
    color: #000;
    border: 1px solid #8bc9e7;
    background-color: #8bc9e7;
  }

  .box-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
  }

  .main-box-container {
    position: absolute;
    top: 450px;
    left:200px;
  }

  .h4 {
    position: absolute;
    top: 350px;
    left:600px;
    font-size:2rem;
    color:#fff;
  }

  @media screen and (max-width: 1024px) {
    .box-wrapper .h4 {
        font-size: 20px;
    }

    .box-container li {
        font-size: 16px;
        margin: 8px 10px;
    }

    .swiper-container h2 {
        font-size: 28px;
        top: 80px;
    }
}

@media screen and (max-width: 480px) {
    .box-wrapper .h4 {
        font-size: 16px;
    }

    .box-container li {
        font-size: 12px;
        margin: 5px;
        padding: 8px 10px;
    }

    .swiper-container {
        height: 250px;
    }

    .swiper-container h2 {
        font-size: 20px;
        top: 60px;
    }
}

  @media screen and (max-width: 768px) {

    .box-wrapper .h4 {
        font-size: 18px;
    }

    .box-container li {
        font-size: 14px;
        margin: 6px 8px;
    }

    .swiper-container {
        height: 300px;
    }

    .swiper-container h2 {
        font-size: 24px;
        top: 70px;
    }
  }

  @media screen and (min-width: 450px) {
    .box-container li {
      border: 1px solid #fff;
      width: 150px;
      height: 110px;
      padding: 35px;
  }

    .main-box-container {
      top: 250px;
      left:90px;
    }

    .h4 {
      top: 150px;
      left:300px;
    }
  }



</style>

<div class="box-wrapper" style="z-index: 50;">
  <h4 class="h4">We produce well refined salts to serve your needs</h4>
  
      <div class="main-box-container">
          <div>
              <ul class="box-container">
                  <a href="/"><li>Home</li></a>
                  <a href="/about-us"><li>About</li></a>
                  <a href="/jobs"><li>Job</li></a>
                  <a href="/contact"><li>Contact</li></a>
                  <a href="/marketing"><li>Marketing</li></a>
                  <a href="/sales"><li>Sales</li></a>
              </ul>
          </div>
      </div>
  </div>

  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <h2 style="position: absolute; top: 100px">We produce well refined <em>salts</em><br> to serve your needs</h2>
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url('assets/images/Dernan-logo.jpg')">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url('assets/images/BackGround2.jpg')">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url('assets/images/BackGround3.jpg')">
            </div>
        </div>
    </div>
  </div>


  <!-- ***** Main Banner Area End ***** -->



  <section class="about-us" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h4>About the company</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <img src="assets/images/salt.png" alt="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <h4>We are a trusted producers of salt.</h4>
            <p>To be the leading supplier of premium salt products in the global market, recognized for our commitment to quality, sustainability, and community development. We aspire to set the industry standard through innovation, excellence, and ethical practices.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  


<br>

  



  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/swiper.js"></script>

  <script src="../assets1/js/vendor-all.min.js"></script>
  <script src="../assets1/js/plugins/bootstrap.min.js"></script>

    <script>

      var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
        delay: 5000, // Change slide every 5 seconds
        disableOnInteraction: false, // Continue autoplay after user interaction
    },
    loop: true, // Infinite loop
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
    </script>

<footer>
  <div class="container-lg px-md-4">
    <div class="row justify-content-md-between justify-content-center text-md-start my-5 flex-column flex-md-row text-center">
      <div class="col-lg-4 h-100 d-flex flex-column mx-auto mx-md-0 mb-lg-0 mb-5">
        <a href="/" class="logo">
          <img src="../assets/images/Asset4@4x.png" style="width:130px" alt="">
        </a>
        <p style="font-size: 14px;" class="mt-5">Copyright © 2024 Dernan Co., Ltd.
          <br>All Rights Reserved.
        </p>
      </div>
      <div class="col-lg-7 col-9 d-flex flex-column flex-md-row px-0 justify-content-lg-end mx-auto mx-md-0">
        <div class="col-lg-3 footerLinks-section">
          <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Company</h6>
          <p>About us</p>
          <p>Job</p>
          <p>Contact us</p>
        </div>
        <div class="col-lg-3 footerLinks-section">
          <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Support</h6>
          <p>Help center</p>
          <p>Terms of service</p>
          <p>Legal</p>
        </div>
        <div class="col-lg-4 me-3 me-lg-0">  </div>
      </div>
    </div>
  </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/isotope.min.js"></script>
<script src="../assets/js/owl-carousel.js"></script>

<script src="../assets/js/tabs.js"></script>
<script src="../assets/js/swiper.js"></script>
<script src="../assets/js/custom.js"></script>

</body>
</html> --}}