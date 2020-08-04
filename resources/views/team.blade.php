@extends('includes.base')

@section('content')

	<!--- Image Slider -->
	<div class="carousel-item active">
		<img class="d-block w-100 carousel carousel-img img-fluid intro-header" src="team.jpg" alt="First slide">
	</div>

	<div class="container">
		<h4 class="display-5 pt-3 pb-3">Meet our team</h4>
		<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col">Sl No:</th>
				<th scope="col">Name</th>
				<th scope="col">Designation</th>
				<th scope="col">Subject</th>
				<th scope="col">Qualification</th>
				<th scope="col">Teaching Experience</th>
			</tr>
			</thead>
			<tbody>
				@foreach ($team as $teamMember)
					<tr>
					<th scope="row">{{ $teamMember['sl_no'] }}</th>
						<td>{{ $teamMember['name'] }}</td>
						<td>{{ $teamMember['designation'] }}</td>
						<td>{{ $teamMember['subject'] }}</td>
						<td>{{ $teamMember['qualification'] }}</td>
						<td>{{ $teamMember['experience'] }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

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