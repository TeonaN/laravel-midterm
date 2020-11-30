@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">

                                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="    border"> 


                    <h4>{{ $products->title }}</h4>                    
                    <b>მწარმოებელი</label><b>
                    <p>{{ $products->manufacturer }}</p>
                            <b>ფასი</label><b>
                    <p>{{ $products->price }}</p>

                    <h4>აღწერა</h4>
                    <p>{{ $products->description }}</p>
                
                    <img src="{{asset('images')."/".$products->image}}"style="height:250px; object-fit: contain"><br>

                                                    @if(Auth::user()->id  == $products->user_id)

                    <a type="button" class="btn btn-secondary" href="{{ route('productsedit',["id"=>$products->id ]) }}">
                            Edit</a>
                             @endif  </div>




            

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


