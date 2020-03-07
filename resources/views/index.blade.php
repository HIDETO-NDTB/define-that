@extends('layouts.app')
@section('content')

@foreach($defines as $define)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card index">
                <div class="card-header title">{{ $define->title }}<span>の定義</span></div>
                <div class="card-body content">
                    <h5>{{ $define->content1 }}<span>{{ $define->connect->title }}</span>{{ $define->content2 }}</h5>
                    <h6>{{ $define->user->name }}</h6>
                    <img class="share" src="{{ asset('app/img/share.png') }}">
                    <img class="good" src="{{ asset('app/img/good.png') }}">                
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection