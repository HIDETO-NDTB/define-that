<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class FrontEndController extends Controller
{
    public function index(){
        return view('index');
    }

    public function initiative(){
        return view('initiative');
    }

    public function mypage($id){
        return view('mypage')->with('users',User::all());
    }
}
