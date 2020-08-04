@extends('includes.base')

@section('content')
	<!--- Image Slider -->
	<div class="carousel-item active">
		<img class="d-block w-100 carousel carousel-img img-fluid intro-header" src="school-1.jpg" alt="First slide">
		<div class="carousel-caption d-none d-md-block">
			<h1 class="banner-color">HOLY TRINITY SCHOOL</h1>
			<h4 class="banner-color">Murikkumood, Kaymamkulam</h4>
		</div>
	</div>

	<!--- Jumbotron -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
				<h2>Lead kindly light</h2>
				<h4 style="color: #51be78 ;">About Our School</h4>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
				<p class="lead">At Holy Trinity Senior Secondary School, we nurture the skills and values of our students which helps them excel 
					no matter where they go or which career they choose.</p>
			</div>
		</div>
	</div>

	<div class="container">
	<!--- Welcome Section -->
		<div class="container-fluid padding welcome">
			<div class="row welcome text-center">
				<div class="col-12">
					<h5 class="display-4">Welcome to Holy Trinity</h3>
				</div>
				<hr>
				<div class="col-12">
					<p class="lead">Established in 1994, Holy Trinity Central School, Kayamkulam is managed by the Holy Trinity Educational
						and Charitable Trust. The School was affilicated to CBSE in 2003 and our first batch of Class X students took the 
						Board Examination (AISSE) in the year 2005. The school is committed in providing world class education which makes 
						our students intellectually adaptable to the career path they choose.</p>
				</div>
			</div>
		</div>

	<!--- Three Column Section -->
		<div class="container-fluid padding mt-5 three-colum">
			<div class="row text-center padding">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fa fa-book" aria-hidden="true"></i>
					<h3>CURRICULAR</h3>
					<p>We also pay attention to the moral development of our students</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<i class="fas fa-futbol" aria-hidden="true"></i>
					<h3>CO-CURRICULAR</h3>
					<p>We also pay attention to the moral development of our students</p>
				</div>
				<div class="lol-xs-12 col-sm-12 col-md-4">
					<i class="fa fa-leaf" aria-hidden="true"></i>
					<h3>MORAL</h3>
					<p>We also pay attention to the moral development of our students</p>
				</div>
			</div>
			<hr>
		</div>

	<!--- Two Column Section -->
		<div class="container-fluid pt-3 pb-5">
			<div class="row padding">
				<div class="col-lg-6">
					<h3 class="display-5">About the school</h3>
					<p class="lead">
						In a short span of time the school has become one of the best educational institutions at Kayamkulam. The tremendous progress we have been making in the educational sphere maked us really proud.Holy trinity is a co-educational CBSE School offering classes from Play Class to Std:XII.Science and Computer Science streams are there in Higher Secondary.
						The School is situated in a calm and serene place of Murukkummodu, 2 Kms east of Kayamkulam Town. 200 mts away from K.P.Road, the School Campus offers a peaceful and natural enviornment for learning. The beautiful countryside and open fields that surround the school provide a fine setting not only for learning but also for sports and outdoor recreation.
					</p>
					<a href="about.png" class="btn btn-primary">Learn More</a>
				</div>
				<!-- TODO:Modal box -->
				<div class="col-lg-6 pt-5 d-flex align-items-top">
					<img src="./about.png" alt="about the school" class="img-fluid">
				</div>
			</div>
		</div>

	<!--- Meet the team -->
		<div class="container-fluid padding padding-top-4">
			<div class="row team text-center">
				<div class="col-12">
					<h3 class="display-4">Meet our team</h3>
				</div>
				<hr>
				<div class="col-12">
					<p class="lead">Established in 1994, Holy Trinity Central School, Kayamkulam is managed by the Holy Trinity Educational
						and Charitable Trust. The School was affilicated to CBSE in 2003 and our first batch of Class X students took the 
						Board Examination (AISSE) in the year 2005. The school is committed in providing world class education which makes 
						our students intellectually adaptable to the career path they choose.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid padding">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<img class="card-img-top card-img" src="principal.png" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Principal</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-outline-secondary">More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<img class="card-img-top card-img" src="principal.png" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Vice Principal</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-outline-secondary">More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<img class="card-img-top card-img" src="manager.png" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Manager</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-outline-secondary">More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<img class="card-img-top card-img" src="manager.png" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">Manager</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-outline-secondary">More</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!--- Connect -->
		<div class="container-fluid padding mt-5 mb-5">
			<div class="row text-center padding container">
				<div class="col-12">
					<h3>Connect</h3>
					<div class="col-12 social padding">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection