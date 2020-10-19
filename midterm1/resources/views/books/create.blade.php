<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form action="{{ route('adminstore') }}" method="POST">
		@csrf
		<label>Author Name</label><br>
		<input type="text" name="author_name" placeholder="author_name"><br>
		<label>Description</label><br>
		<textarea type="text" name="description"></textarea><br>
		<label>Title</label><br>
		<input type="text" name="title" placeholder="title"><br>
		<label>Genre ID</label><br>
		<input type="text" name="genre_id" placeholder="genre_id"><br>
		<button>save</button>
	</form>

</body>
</html>