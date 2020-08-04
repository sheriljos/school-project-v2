@extends('includes.base')

@section('content')
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
	</div>
@endsection