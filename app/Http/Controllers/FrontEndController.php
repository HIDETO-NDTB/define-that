<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Define;
use App\Connect;
use App\Favorite;

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

    public function popular(){
        $popularDefines = Define::withCount('favorite_users')->orderBy('favorite_users_count','desc')->get();
        $connects = Connect::all();
        $users = User::all();

        return view('popular_order')->with('popularDefines',$popularDefines)
                                    ->with('connects',Connect::all())
                                    ->with('users',User::all()); 

    }

    public function created(){
        $defines = Define::orderBy('created_at','desc')->get();
        $connects = Connect::all();
        $users = User::all();

        return view('created')->with('defines',$defines)
                              ->with('connects',Connect::all())
                              ->with('users',User::all());

    }

    public function legend(){
        $legendDefines = Define::withCount('favorite_users')->orderBy('favorite_users_count','desc')->get();
        $legendDefinesCount = Define::withCount('favorite_users')->orderBy('favorite_users_count','desc')->first();
        $connects = Connect::all();
        $users = User::all();

        return view('legend')->with('legendDefines',$legendDefines)
                            ->with('legendDefinesCount',$legendDefinesCount)
                            ->with('connects',Connect::all())
                            ->with('users',User::all()); 

    }

    public function initiative(){
        return view('initiative');
    }

    public function mypage($id){
        $defines = Define::all();
        $userdefines  = Define::orderBy('created_at','desc')->where('user_id',$id)->get();
        $userdefinesCount  = Define::orderBy('created_at','desc')->where('user_id',$id)->count();

        return view('mypage')->with('defines',$defines)
                             ->with('userdefines',$userdefines)
                             ->with('userdefinesCount',$userdefinesCount);
    }
}
