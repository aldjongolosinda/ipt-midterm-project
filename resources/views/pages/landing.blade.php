@extends('layouts.app')

@section('content')

    <div class="bg-primary menu-style">

        <h1 class="menu text-white"nav-items" ">Main Menu</h1>
        <hr>
        <div class="container">
            <ul class="menu-ul text-decoration-none" style="list-style: none; padding-left:0px">
                <li class="menu-li"><a class="nav-items" href="{{url('/')}}">Home</a></li>
                <li class="menu-li"><a class="nav-items" href="{{url('/users')}}">Users</a></li>
                <li class="menu-li"><a class="nav-items" href="{{url('/accounts')}}">Accounts</a></li>
            </ul>

        </div>
    </div>
@endsection
