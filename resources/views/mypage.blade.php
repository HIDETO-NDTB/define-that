@extends('layouts.app')

@section('content')
<div class="container">
    <div class="userpage">
        <h3 class="username">Hideto</h3>
        <a class="editbtn"><img class="editimg" src="{{ asset('app/img/edit.png') }}">編集する</a>
    </div>
    <div class="card index">
        <div class="card-header title">夢<span>の定義</span></div>
        <div class="card-body content">
            <h5>いつもそばにあるつもり<span>だけど</span>いつもとおくにある</h5>
            <h6>Hideto</h6>
            <img class="good" src="{{ asset('app/img/good.png') }}">                
        </div>
    </div>
</div>

@endsection