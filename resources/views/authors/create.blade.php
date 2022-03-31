@extends( "layout" )

@section( "content" )

	<form action="{{ url( 'authors' ) }}" method="post">
		@csrf()
		<div class="mb-3">
			<label for="name" class="form-label">Name:</label>
			<input class="form-control" name="name" id="name" placeholder="Name" />
		</div>

		<div class="mb-3">
			<label for="nationality" class="form-label">Nationality:</label>
			<input class="form-control" name="nationality" id="nationality" placeholder="Nationality" />
		</div>

		<div class="mb-3">
			<label for="date_of_birth" class="form-label">Date of birth:</label>
			<input class="form-control" name="date_of_birth" id="date_of_birth" type="date" value="{{ date( 'Y-m-d' ) }}" />
		</div>
		
		<div class="mb-3">
			<label for="gender" class="form-label">Gender:</label>

			<select class="form-select" name="gender" id="gender">
				<option value="M">Male</option>
				<option value="F">Female</option>
				<option value="O" selected>Other</option>
			</select>
		</div>

		<div class="btn-group" role="group">
			<input class="btn btn-dark" type="submit" value="Store" />
			<a class="btn btn-secondary" href="{{ url()->previous() }}">Cancel</a>
		</div>
	</form>
	
@endsection
