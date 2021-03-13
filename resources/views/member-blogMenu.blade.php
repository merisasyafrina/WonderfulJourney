@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col">
                <a href="{{url('/member-blogMenu/member-createBlog/')}}" type="button" class="btn btn-outline-primary">+ Create Blog</a>
            </div>
        </div>
        <table class="table">
            <thead class="table-light"> 
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach($articles as $a)
            <tbody>
                <tr>
                    <td>
                        <a href="{{url('/member-articleDetail/'.$a->id.'/')}}">{{$a->title}}</a>
                    </td>
                    <td>
                        <form action="{{'/member-blogMenu/'.$a->id.'/'}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-outline-primary btn-sm" id="deleteBtn">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection