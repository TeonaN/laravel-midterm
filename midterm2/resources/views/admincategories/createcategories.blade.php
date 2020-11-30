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

		<form action="{{ route('categoriesstore') }}" method="POST" >
		@csrf
		<input class="form-control"  type="text" name="title" placeholder="კატეგორიის სახელი" class=" @error('title') is-invalid @enderror">
		@error("title")
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
		<br>

		

		<button type="submit" class="btn btn-primary">შენახვა</button>
	</form>
</div>
@endsection