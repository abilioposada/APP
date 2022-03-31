@extends( "layout" )

@section( "content" )
	<a class="btn btn-secondary" href="{{ url( 'authors/create' ) }}">Create</a>

	<div class="table-responsive">
		<table class="table table-sm table-dark table-striped table-hover table-bordered">
			<caption>Authors</caption>

			<thead>
				<tr>
					<th>Name</th>
					<th>Nationality</th>
					<th>Gender</th>
					<th>Date of birth</th>
					<th colspan="3">Options</th>
				</tr>
			</thead>

			<tbody>

				@foreach( $authors as $author )
					<tr>
						<td>{{ $author->name }}</td>
						<td>{{ $author->nationality }}</td>
						<td>{{ $author->gender }}</td>
						<td>{{ $author->date_of_birth }}</td>

						<td><a class="btn btn-light" href="{{ url( 'authors', $author->id ) }}">Show</a></td>

						<td><a class="btn btn-warning" href="{{ url( 'authors/' . $author->id. '/edit' ) }}">Edit</a></td>

						<td>
							<form method="post" action="{{ url( 'authors', $author->id ) }}">
								@csrf()
								@method( "DELETE" )
								<input class="btn btn-danger" type="submit" value="Delete" />
							</form>
						</td>
					</tr>
				@endforeach

			</tbody>
		</table>
	</div>
@endSection
