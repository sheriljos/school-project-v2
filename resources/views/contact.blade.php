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
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
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
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


<div class="container">

	@if ($hasValidationError)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors as $key => $value)
					<li>{{ $value[0] }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	@if ($message)
		<div class="alert alert-info">
			{{ $message ?? '' }}
		</div>
	@endif

<!--- Two Column Section -->
	<div class="container-fluid pt-3 pb-5">
		<h3 class="display-5">Contact</h3>
		<div class="row padding">
			<div class="col-lg-6">
				<form action="email" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea name="message" class="form-control" id="message" rows="5"></textarea>
					  </div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<!-- TODO:Modal box -->
			<div class="col-lg-6 pt-5">
				<img src="./email.jpg" class="img-fluid" alt="Responsive image">
			</div>
		</div>
	</div>


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
