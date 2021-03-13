@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        @foreach($article as $a)
        <div class="col-auto mb-3">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="/assets/{{$a->image}}">
                <div class="card-body">
                    <h5 class="card-title">{{$a->title}}</h5>
                    <p class="card-text" style="color: black; align-self: center;">
                        {{Illuminate\Support\Str::limit($a->description,150)}} 
                        <a href="{{url('/articleDetail/'.$a->id.'/')}}">full story</a>
                    </p>
                    <p class="card-text">
                        Category: 
                        <a href="{{url('/category/'.$a->categoryId.'/')}}">{{$a->categoryName}}</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br>
</div>


@endsection