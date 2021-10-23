@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="mt-4">Users</h1>

        <table class="table table-bordered">
            <thead class="bg-primary">
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->lname}}</td>
                    <td>{{$user->fname}}</td>
                    <td>{{$user->address}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
