<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Dernan</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> --}}

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

        body {
        font-family: Arial, sans-serif;
        background-color: #f1f3f4;
        margin: 0;
        padding: 0;
    }
    
    .header {
        text-align: center;
        padding: 20px;
    }
    
    .logo {
        max-width: 100px;
        margin-bottom: 10px;
    }
    
    h1 {
        margin: 0;
        font-size: 24px;
        color: #005687;
    }
    
    .form-title {
        background-color: #51B3E4;
        color: white;
        padding: 10px;
        border-radius: 4px;
        margin: 20px 0;
        text-align: center;
    }
    
    .account-info {
        background-color: #e7f0f8;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 20px;
    }
    
    .account-info p {
        margin: 5px 0;
        font-size: 14px;
    }
    
    .info-text {
        color: #666;
    }
    
    .required-text {
        color: #d93025;
        font-size: 12px;
    }
    
    .application-form {
        margin-top: 20px;
    }
    
    fieldset {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 4px;
    }
    
    legend {
        font-size: 18px;
        color: white;
        background-color: #51B3E4;
        padding: 5px 10px;
        border-radius: 4px;
    }
    
    .form-group {
        margin-bottom: 15px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="date"], 
    input[type="email"],
    input[type="file"] {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f9f9f9;
    }
    
    input[type="radio"] {
        margin-right: 5px;
    }
    
    label span {
        color: #d93025;
    }

       .main-container {
        width: 60%;
        margin: 20px auto;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .fieldset {
        /* border: 1px solid #005687; */
        /* background-color: #005687; */
        width: 240px;
        padding: 10px;
        margin: 10px;
        border-radius: 5px;
        color: #000000;
        font-weight: bold
    }

    .fieldset-containter {
        position: absolute;
        left: 50px;
        padding: 10px;
        margin: 10px;

    }
</style>
  </head>

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="../assets/images/Asset4@4x.png" style="width:4.5em" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    {{-- <ul class="nav">
                        <li class="scroll-to-section"><a wire:navigate href="/">Home</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/about-us">About</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/jobs">job</a></li>
                        <li><a wire:navigate href="/contact">Contact</a></li> 
                        <li class="scroll-to-section"><a wire:navigate href="/marketing">Marketing</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/sales">Sales</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/admin-login">Login</a></li>
                    </ul>         --}}
                    {{-- <a class='menu-trigger'>
                        <span>Menu</span>
                    </a> --}}
                    
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
    
</header>

<body>
 <form action="">
  
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 offset-md-3">

            <h2 class="form-title" style="margin-top: 50px">Referee Form</h2>
            <fieldset>
                <legend>Testimony</legend>
                <div class="form-group">
                    <label for="first-name">Testimony <span>*</span></label>
                    <textarea name="testimony" cols="65" class="form-control" rows="6" required placeholder="Your Testimony "></textarea>
                    <span class="text-danger">@error('testimony'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="middle-name">Document <span>*</span></label>
                    <input type="file" name="document">
                    <span class="text-danger">@error('document'){{ $message }} @enderror</span>
                </div>
            </fieldset>
            <div style="margin-top: 30px;margin-bottom:50px">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
           
</form>
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
              <div class="col-lg-4 me-3 me-lg-0">
                <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Stay up to date</h6>
                <div class="position-relative footerInput-container mx-auto mx-md-0">
                  <input type="email" name="" id="" placeholder="Your email address" class="footer-input px-2 py-2 pe-4 rounded-3">
                  <div class="position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center pe-2">
                    <img src="../assets/icons/Vector.png" class="plane-icon text-white" style="width: 20px; height: 20px;" alt="">
                  </div>
                </div>
              </div>
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
    </html>