<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Dernan Salt Ltd</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-574-mexant.css">
    {{-- <link rel="stylesheet" href="../assets/css/owl.css"> --}}
    {{-- <link rel="stylesheet" href="../assets/css/animate.css"> --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> --}}

	<link rel="stylesheet" href="../assets/css/style.css">

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
 <header class="header-area header-sticky" style="background-color: #51B3E4">
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

<div class="auth-wrapper">
	<!-- [ reset-password ] start -->
	<div class="auth-content">
		<div class="card" style="border: 1px solid #51B3E4; top:70px;">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
                    <form action="{{url('/applicant-login')}}" method="POST">
						@if (Session::has('success'))
							<div class="alert alert-success">{{ Session::get('success') }}</div>
						@endif
						@if (Session::has('fail'))
							<div class="alert alert-danger">{{ Session::get('fail') }}</div>
						@endif
						@csrf
					<div class="card-body">
						<img src="../assets/images/Asset4@4x.png" alt="" class="img-fluid mb-4" style="width:6.5em">
						<h4 class="mb-3 f-w-400">Log In your account</h4>
						{{-- <p style="font-weight: bold">Provide the information requested.</p> --}}
						<hr>
						<div class="form-group mb-4">
							<label class="floating-label" for="Username">Email</label>
							<input type="text" class="form-control" name="email" required value="{{old('email')}}">
							<span class="text-danger">@error('email'){{ $message }} @enderror</span>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Username">Password</label>
							<input type="password" class="form-control" name="password" required>
							<span class="text-danger">@error('password'){{ $message }} @enderror</span>
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4" style="background-color: #51B3E4">Log in</button>
            {{-- <p><a href="/applicant-sign-up">Create Account</a></p> --}}
          </div>
        </form>
				</div>
			</div>
		</div>
	</div>
	<!-- [ reset-password ] end -->
</div>

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
            {{-- <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Stay up to date</h6> --}}
            {{-- <div class="position-relative footerInput-container mx-auto mx-md-0"> --}}
              {{-- <input type="email" name="" id="" placeholder="Your email address" class="footer-input px-2 py-2 pe-4 rounded-3"> --}}
              {{-- <div class="position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center pe-2">
                <img src="../assets/icons/Vector.png" class="plane-icon text-white" style="width: 20px; height: 20px;" alt="">
              </div> --}}
            {{-- </div> --}}
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Required Js -->
<script src="../assets/js/vendor-all.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/ripple.js"></script>
<script src="../assets/js/pcoded.min.js"></script>

 <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  {{-- <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>

  <script src="../assets/js/tabs.js"></script>
  <script src="../assets/js/swiper.js"></script>
  <script src="../assets/js/custom.js"></script> --}}

</body>
</html>