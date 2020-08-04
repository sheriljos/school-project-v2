<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Holy Trinity Senior Secondary School</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">    <link rel="stylesheet" href="css/app.css">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<!-- TODO: Design Logo Image -->
		<a href="#" class="navbar-brand">LOGO</a>
		<button type="button"  class="navbar-toggler" data-toggle="collapse" data-target="#holyTrinityHeader">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="holyTrinityHeader">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a href="/" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="/about" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="/team" class="nav-link">Team</a>
				</li>
				<li class="nav-item">
					<a href="/gallery" class="nav-link">Gallery</a>
				</li>
				<li class="nav-item">
					<a href="/contact" class="nav-link">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

@yield('content')

<!--- Footer -->
<footer>
	<div class="container-fluid padding mt-4 footer">
		<div class="row text-center">
			<div class="col-md-4">
				<h6>Contact</h6>
				<hr>
				<p>0479 - 2444456</p>
				<p>holytrinity93@yahoo.com</p>
			</div>
			<div class="col-md-4">
				<h6>School hours</h6>
				<hr>
				<p>Monday - Saturday</p>
				<p>9am - 4pm</p>
			</div>
			<div class="col-md-4">
				<h6>Address</h6>
				<hr>
				<p>Murikkumood, Kayamkulam</p>
				<p>Pin:66666666</p>
			</div>
		</div>
		<div class="col-12 text-center">
			<hr class="copy_rights">
			<h5>&copy; Sheril Jose</h5>
		</div>
	</div>
</footer>

</body>
</html>
