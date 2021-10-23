<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;


class AccountController extends Controller
{
    //
    public function index(){

        $accounts = Accounts::all();

        return view('pages.account',['accounts'=>$accounts]);
    }
}
