<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>

		<label  style="background-color:powderblue">Author Name</label>
		<p>{{ $book->author_name }}</p>
		<label  style="background-color:powderblue">Description</label>
		<p>{{ $book->description }}</p>
		<label  style="background-color:powderblue">Title</label>
		<p>{{ $book->title }}</p>
		<label  style="background-color:powderblue">Created at</label>

		<small>{{ $book->created_at }}</small>


	</div>

</body>
</html>