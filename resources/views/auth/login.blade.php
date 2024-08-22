<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/templatemo-574-mexant.css">
	
	


</head>
<body>
<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img" style="background-image:url(assets/images/Dernan-logo.jpg)">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				{{-- <img src="assets/images/Dernan-logo.jpg" alt="" > --}}
				<h1 class="text-white my-4" style="font-size: 5rem">Admin</h1>
				<h4 class="text-white font-weight-normal">Signin to your account.</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				{{-- <img src="assets/images/auth/auth-logo-dark.png" alt="" > --}}
                <img src="assets/images/Dernan-logo.jpg" style="width:4.5em" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h3 class="mb-4 f-w-400">Login</h3>
				<form action="{{url('/login')}}" method="POST">
					@csrf
				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Email address</label>
					<input type="text" class="form-control" name="email" id="Email" placeholder="">
				</div>
				<div class="form-group mb-4">
					<label class="floating-label" for="Password">Password</label>
					<input type="password" class="form-control" name="password" id="Password" placeholder="">
				</div>
				<button class="btn btn-block btn-primary mb-4">Login</button>
			</form>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>