@extends('includes.base')

@section('content')
	<!--- Gallery Card -->
	<div class="container pt-4">
		<div class="row">
			@foreach ($inside as $item)
				<div class="col-lg-4 col-md-6 p-2">
					<div class="card gallery-card">
						<img class="card-img-top card-img" src="inside/{{ $item['image'] }}" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">{{ $item['title'] }}</h5>
						</div>
					</div>
				</div>
			@endforeach
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