@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="p-1 text-dark text-center">
            <h3 class="navbar-brand p-1 pl-3">{{$categories->categoryName}}</h3>
    </div>

    <div class="row justify-content-center">
        @foreach($articles as $a)
        <div class="col-auto mb-3">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="/assets/{{$a->image}}">
                <div class="card-body">
                    <h5 class="card-title">{{$a->title}}</h5>
                    <p class="card-text" style="color: black; align-self: center;">
                        {{Illuminate\Support\Str::limit($a->description,150)}} 
                        <a href="{{url('/articleDetail/'.$a->id.'/')}}">full story</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br>
</div>


@endsection