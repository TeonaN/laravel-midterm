<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
		@foreach ($books as $book)

		<p>{{ $book->author_name }}</p>
		<p>{{ $book->description }}</p>
		<p>{{ $book->title }}</p>
		<small>{{ $book->created_at }}</small>
		
		@endforeach

	</div>

</body>
</html>