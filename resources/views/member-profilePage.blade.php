@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
    @foreach($users as $u)
    @if($u->userId == Auth::user()->userId)
    <form action="{{route('member-profilePage', Auth::user()->userId)}}" method="GET" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name:</label>
            <input type="text" name="name" class="form-control" value="{{$u->name}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" name="email" class="form-control" value="{{$u->email}}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" value="{{$u->phone}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endif
    @endforeach
    </div>
</div>
@endsection