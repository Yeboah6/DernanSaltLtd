<!DOCTYPE html>
<html lang="en">

<head>

	<title>Dernan Salt Ltd | Verify Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="../assets/css/style.css">
	
	


</head>

<div class="auth-wrapper">
	<!-- [ reset-password ] start -->
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
                    <form action="{{url('/verify-email')}}" method="POST">
						@if (Session::has('success'))
							<div class="alert alert-success">{{ Session::get('success') }}</div>
						@endif
						@if (Session::has('fail'))
							<div class="alert alert-danger">{{ Session::get('fail') }}</div>
						@endif
						@csrf
					<div class="card-body">
						<img src="../assets/images/Asset4@4x.png" alt="" class="img-fluid mb-4" style="width:6.5em">
						<h6 class="mb-3 f-w-400">Set Password | Verify Account</h6>
						<div class="form-group mb-4">
							<label class="floating-label" for="Username">Email</label>
							<input type="text" class="form-control" name="email" value="{{old('email')}}">
							<span class="text-danger">@error('email'){{ $message }} @enderror</span>
						</div>
                        <div class="form-group mb-4">
							<label class="floating-label" for="Username">Password</label>
							<input type="password" class="form-control" name="password">
							<span class="text-danger">@error('password'){{ $message }} @enderror</span>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Username">Confirm Password</label>
							<input type="password" class="form-control" name="confirm_password">
							<span class="text-danger">@error('password'){{ $message }} @enderror</span>
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4" style="background-color: #51B3E4">Login</button>
					</div>
                </form>
				</div>
			</div>
		</div>
	</div>
	<!-- [ reset-password ] end -->
</div>

<!-- Required Js -->
<script src="../assets/js/vendor-all.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/ripple.js"></script>
<script src="../assets/js/pcoded.min.js"></script>



</body>

</html>
