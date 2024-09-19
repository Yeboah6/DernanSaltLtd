

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts1/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css1/owl.carousel.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css1/bootstrap.min.css">
    <link rel="icon" href="../assets1/images/favicon.ico" type="image/x-icon">
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css1/style.css">


    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-574-mexant.css">
    {{-- <link rel="stylesheet" href="../assets/css/owl.css"> --}}
    {{-- <link rel="stylesheet" href="../assets/css/animate.css"> --}}

    <title> Dernan Salt Ltd | Home </title>

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
          opacity: 1; 
          z-index: 1;
          color: #fff;
          font-size: 2.5rem;
          top: 100px;
          left: 290px;
        }

        .box-container {
          position:absolute;
          display: block;
          opacity: 1;
          z-index: 1;
          top: 220px;
          left: 300px;
        }

        .box-container2 {
          position:absolute;
          display: block;
          opacity: 1;
          z-index: 1;
          top: 220px;
          left: 830px;
        }

        .box-wrapper {
          display: block;
        }

        .box-wrapper li {
          border: 1px solid #fff;
          border-radius: 5px;
          /* display: flex; */
          margin: 30px;
          font-size: 1.3rem;
          padding-left: 60px;
          padding-top: 35px;
          width: 200px;
          height: 100px;
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
            left: 100px;
          }

          .box-container2 {
            top: 475px;
            left: 100px;
          }

          .box-wrapper {
            display: block;
          }

          .box-wrapper li {
            width: 200px;
            height: 100px;
            font-size: 1rem;
            /* text-align: center; */
            padding-left: 70px;
            /* padding-top: 30px; */
            margin: 8px;
          }

          .box-wrapper a .box-line {
            /* padding-left: 200px; */
            /* position: relative; */
            /* left: 100px; */
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
        .footerLinks-section > p > a{
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
      <h4 class="topic">We produce well refined salts to serve your needs.</h4>

    <div class="box-container">
      <ul class="box-wrapper">
          <a class="box-line" href="/"><li>Home</li></a>
          <a class="box-line" href="/about-us"><li>About</li></a>
          <a class="box-line" href="/jobs"><li>Job</li></a>
      </ul>
      {{-- <ul class="box-wrapper">
        <a href="/contact"><li>Contact</li></a>
        <a href="/marketing"><li>Marketing</li></a>
        <a href="/sales"><li>Sales</li></a>
      </ul> --}}
    </div>
    <div class="box-container2">
    <ul class="box-wrapper">
      <a class="box-line" href="/contact"><li>Contact</li></a>
      <a class="box-line" href="/marketing"><li>Marketing</li></a>
      <a class="box-line" href="/sales"><li>Sales</li></a>
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
              <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Dernan Salt Ltd</h6>
              <p><a href="/about-us">About us</a></p>
              <p><a href="jobs">Job</a></p>
              <p><a href="/contact">Contact us</a></p>
              <p><a href="/marketing">Marketing</a></p>
              <p><a href="/sales">Sales</a></p>
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