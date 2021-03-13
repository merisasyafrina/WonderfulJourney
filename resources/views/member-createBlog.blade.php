@extends('layouts.app')

@section('content')
<div class="container ">
<h3 class="row justify-content-center">New Blog</h3>
    <div class="row justify-content-center">
    <form action="{{url('member-blogMenu/member-createBlog/create')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title">
        </div>
        </div>
        <div class="form-group">
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <div class="col-md-18">
                <select class="form-control" name="category" id="exampleFormControlSelect1">
                    @php 
                        $article = App\Category::all();
                    @endphp
                    @foreach($article as $a)               
                    <option value="" disabled selected hidden>Select Category</option>
                    <option value="{{$a->categoryId}}">{{$a->categoryName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="mb-3">
            <label for="image" class="form-label">Photo:</label>
            <div class="custom-file">
                <input type="file" name="image" accept="image/*" style="width: 260px;" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose File</label>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="mb-3">
            <label for="description" class="form-label">Story:</label>
            <textarea type="text" name="description" class="form-control" rows="10"></textarea>
        </div>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    </div>
</div>
@endsection