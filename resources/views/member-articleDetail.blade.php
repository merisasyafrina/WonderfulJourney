@extends('layouts.app')

@section('content')
<div class="custom-container container">
    <div class="row">
        <div class="col">
            <img class="card-img-top" src="/assets/{{$article->image}}">
        </div>
        <div class="col">
            <div class="card-body">
                <div class="card-content">
                <h5 class="card-title">{{$article->title}}</h5>
                <hr>
                <p class="card-text">{{$article->description}}</p>
                <br>
                <a href="{{ url('/member-blogMenu/') }}" type="button" class="btn btn-dark">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

