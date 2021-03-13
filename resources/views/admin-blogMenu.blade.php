@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <h3>Article List</h3>
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
                        <a href="{{url('/admin-articleDetail/'.$a->id.'/')}}">{{$a->title}}</a>
                    </td>
                    <td>
                        <form action="{{'/admin-blogMenu/'.$a->id.'/'}}" method="post">
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