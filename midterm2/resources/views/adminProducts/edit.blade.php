@extends('layouts.app')

@section('content')
<div>

	                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

		<form action="{{ route('productsupdate') }}" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{ $products->id }}">
		<label>Title</label><br>
		<input type="text" name="title" placeholder="title" value="{{ $products->title }}"><br>
				<label>Manufacturer</label><br>
		<input type="text" name="manufacturer"  value="{{ $products->title }}"><br>
		<label>Price</label><br>
		<input type="text" name="price"  value="{{ $products->price }}"><br>
		<label>Description</label><br>
		<textarea type="text" name="description">{{ $products->description }}</textarea><br>
		<label>Short Description</label><br>
		<textarea type="text" name="short_description">{{ $products->short_description }}</textarea><br>
		            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
		<button>save</button>
	</form>

	</div>

@endsection