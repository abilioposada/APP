@extends( "layout" )

@section( "content" )
	<table class="table table-striped table-hover table-bordered">
		<caption>Details</caption>

		<thead>
			<tr>
				<th>Property</th>
				<th>Value</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th>ID</th>
				<td>{{ $author->id }}</td>
			</tr>

			<tr>
				<th>Name</th>
				<td>{{ $author->name }}</td>
			</tr>

			<tr>
				<th>Nationality</th>
				<td>{{ $author->nationality }}</td>
			</tr>

			<tr>
				<th>Date of birth</th>
				<td>{{ $author->date_of_birth }}</td>
			</tr>

			<tr>
				<th>Gender</th>
				<td>{{ $author->gender == 'M' ? 'Male' : ( $author->gender == 'F' ? 'Female' : 'Other' ) }}</td>
			</tr>
		</tbody>

		<tfoot>
			<tr>
				<td colspan="2">
					<div class="btn-group" role="group">
						<a class="btn btn-dark" href="{{ url()->previous() }}">Return</a>
						<a class="btn btn-warning" href="{{ url( 'authors/' . $author->id. '/edit')}}">Edit</a>

						<form method="post" action="{{ url( 'authors', $author->id ) }}">
							@csrf()
							@method( "DELETE" )
							<input class="btn btn-danger" type="submit" value="Delete" />
						</form>
					</div>
				</td>
			</tr>
		</tfoot>
	</table>

@endsection
