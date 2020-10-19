<!DOCTYPE html>
<html>
<head>
	<title></title>

	
	<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
	</style>
</head>
<body>


		<div>
		<table>
			<tr>
				<td>#</td>
				<td>Author Name</td>
				<td>Description</td>
				<td>Title</td>
				<td>Genre ID</td>
			</tr>

			@foreach ($books as $book)
			<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $book->author_name }}</td>
				<td>{{ $book->description  }}</td>
				<td>{{ $book->title }}</td>
				<td>{{ $book->genre_id }}</td>

				<td>

					<form action="{{ route('admindestroy') }}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{$book->id }}">
							<button>Delete</button>
						</form>
				</td>

			</tr>

			@endforeach
		</table>
	</div>

	</body>
</html>