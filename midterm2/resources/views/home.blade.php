@extends('layouts.app')

@section('content')
<div class="flex-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">პროდუქცია</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="flex-container row " >

            @foreach ($products as $product)
                    @if($loop->index < 10)
                                <div class="flex-content col-md-6 card " style="  margin-top: 30px; margin-bottom: 30px; ">




        <img src="{{asset('images')."/".$product->image}}"style="height:250px; object-fit: contain">
                        <b>{{ $product->title }}</b>

                <p>{{ $product->short_description }}</p>
                <button type="button" class="btn btn-outline-primary">{{ $product->price }}</button>
                            



                            <a href="{{ route('show',["id"=>$product->id ]) }}">
                        ვრცლად</a>
                </td>



                                @if(Auth::user()->id  == $product->user_id)
                    <form action="{{ route('productsdelete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id }}">
                            <button type="button" class="btn btn-danger">წაშლა</button>
                        </form> 
                            
                        @endif


                            </div>


        @endif
      
            @endforeach



                            </div>
                                                            @if(Auth::user()->id  == $product->user_id)

<a href="{{ route('productscreate') }}" type="button" class="btn btn-primary">
                            პროდუქციის შექმნა</a>   
                             @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
