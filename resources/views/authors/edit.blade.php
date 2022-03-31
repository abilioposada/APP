@extends( "layout" )

@section( "content" )
	<form action="{{ url( 'authors', $author->id ) }}" id="authorUpdate" method="post">
		@csrf()
		@method( "PUT" )
		<div class="mb-3">
			<label for="name" class="form-label">Name:</label>
			<input class="form-control" name="name" id="name" placeholder="Name" value="{{ $author->name }}" />
		</div>

		<div class="mb-3">
			<label for="nationality" class="form-label">Nationality:</label>
			<input class="form-control" name="nationality" id="nationality" placeholder="Nationality" value="{{ $author->nationality }}" />
		</div>

		<div class="mb-3">
			<label for="date_of_birth" class="form-label">Date of birth:</label>
			<input class="form-control" name="date_of_birth" id="date_of_birth" type="date" value="{{ $author->date_of_birth }}" />
		</div>
		
		<div class="mb-3">
			<label for="gender" class="form-label">Gender:</label>

			<select class="form-select" name="gender" id="gender">
				<option value="M" {{ $author->gender == 'M' ? 'selected' : '' }}>Male</option>
				<option value="F" {{ $author->gender == 'F' ? 'selected' : '' }}>Female</option>
				<option value="O" {{ $author->gender == 'O' ? 'selected' : '' }}>Other</option>
			</select>
		</div>

	</form>

	<div class="btn-group" role="group">
		<input form="authorUpdate" class="btn btn-success" type="submit" value="Update" />

		<form method="post" action="{{ url( 'authors', $author->id ) }}">
			@csrf()
			@method( "DELETE" )
			<input class="btn btn-danger" type="submit" value="Delete" />
		</form>

		<a class="btn btn-dark" href="{{ url()->previous() }}">Cancel</a>
	</div>
@endsection 