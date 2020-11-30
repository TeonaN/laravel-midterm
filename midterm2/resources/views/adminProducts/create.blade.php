@extends('layouts.app')

@section('content')
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<div>
	                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

		<form action="{{ route('productsstore') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<label>სათაური</label><br>
		<input class="form-control" type="text" name="title" placeholder="title" class=" @error('title') is-invalid @enderror">
		@error("title")
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
		<br>
		<label>მწარმოებელი</label><br>
		<input class="form-control" type="text" name="manufacturer"></input><br>
		<label>Price</label><br>
		<input class="form-control" type="text" name="price"></input><br>
		<label>აღწერა</label><br>
		<textarea class="form-control" type="text" name="description"></textarea><br>
		<label>მოკლე აღწერა</label><br>
		<textarea class="form-control" type="text" name="short_description"></textarea><br>
		<input class="form-control-file" type="file" name="image"><br>
		<input class="form-control" type="hidden" name="category_id" value="1">

            <label for="category_id">კატეგორია</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option class="form-control-file" value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            <br>

		

		<button type="submit" class="btn btn-primary">შენახვა</button>
	</form>
</div>
@endsection