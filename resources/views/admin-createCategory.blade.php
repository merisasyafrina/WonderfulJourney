@extends('layouts.app')

@section('content')
<div class="container ">
<h3 class="row justify-content-center">New Category</h3>
    <div class="row justify-content-center">
    <form action="{{url('admin-blogMenu/admin-createCategory/create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
        <div class="mb-3">
            <label for="categoryName" class="form-label fw-bold">Category Name:</label>
            <input type="text" name="categoryName" class="form-control" placeholder="Enter title">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
</div>
@endsection