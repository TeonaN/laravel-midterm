

 @extends('layouts.app')

@section('content')
<div class="flex-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="flex-container row " >

            @foreach ($categories as $category)
                    @if($loop->index < 10)
                                <div class="flex-content col-md-6 card ">




                <a type="button" class="btn btn-outline-primary" >{{ $category->title }}</a>

                                                @if(Auth::user()->id  ==1)


           
                            
                                    <form action="{{ route('categoriesdelete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id }}">
                            <button button type="button" class="btn btn-danger">წაშლა</button>
             

                


                        @endif



                            </div>


        @endif
      
            @endforeach

                            </div>
                                    @if(Auth::user()->id  ==1)


<a href="{{ route('categoriescreate') }}" type="button" class="btn btn-primary">
                            კატეგორიის შექმნა</a>
                                    @endif

                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
