@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <h3>Contact List</h3>
        <table class="table">
            <thead class="table-light"> 
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach($users as $u)
            <tbody>
                <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <form action="{{'/admin-userList/'.$u->userId.'/'}}" method="post">
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