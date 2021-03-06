<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Define;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DefineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request,[
            'title' => 'required|max:20',
            'content1' => 'required|max:50',
            'content2' => 'required|max:50',
        ]);

        // Mass Assignment
        $define = Define::create([
            'title' => $request->title,
            'content1' => $request->content1,
            'connect_id' => $request->connect_id,
            'content2' => $request->content2,
            'user_id' => Auth::user()->id,
        ]);

        $define->save();

        Session::flash('success','定義が発表されました');
        return redirect()->route('created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Define $define)
    {
        $define->delete();

        Session::flash('success','定義が削除されました');
        return redirect()->back();
    }
}
