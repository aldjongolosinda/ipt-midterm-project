@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="mt-4">Accounts</h1>

        <table class="table table-bordered">
            <thead class="bg-primary">
            <tr>
                <th scope="col">Account #</th>
                <th scope="col">Account Name</th>
                <th scope="col">Initial Investment</th>
                <th scope="col">Date Started</th>
            </tr>
            </thead>
            <tbody>
            @foreach($accounts as $account)
                <tr>
                    <td>{{$account->id}}</td>
                    <td>{{$account->acct_name}}</td>
                    <td>{{$account->init_invest}}</td>
                    <td>{{$account->start_date}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
