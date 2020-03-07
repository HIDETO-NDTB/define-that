<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Define;
use App\Connect;

class FrontEndController extends Controller
{
    public function index(){
        $defines = Define::orderBy('created_at','desc')->get();
        $connects = Connect::all();
        $users = User::all();

        return view('index')->with('defines',$defines)
                            ->with('connects',Connect::all())
                            ->with('users',User::all());
    }

    public function initiative(){
        return view('initiative');
    }

    public function mypage($id){
        return view('mypage')->with('users',User::all());
    }
}
