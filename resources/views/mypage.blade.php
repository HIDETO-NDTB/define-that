@extends('layouts.app')

@section('content')
<div class="container">
    <div class="userpage">
        <h3 class="username">{{ Auth::user()->name }} さんのページ</h3>
    </div>
    @if($userdefinesCount>0)
    @foreach($userdefines as $userdefine)
    <div class="card index">
        <div class="card-header title">{{ $userdefine->title }}<span>の定義</span></div>
        <div class="card-body content">
            <h5>{{ $userdefine->content1 }}<span>{{ $userdefine->connect->title }}</span>{{ $userdefine->content2 }}</h5>
            <h6>{{ $userdefine->user->name }}</h6>
            <h5 class="favorites">いいね！ {{ $userdefine->favorite_users->count() }}</h5>      
        </div>
        <form action="{{ route('definedelete',['id'=>$userdefine->id]) }}" method="POST">
        @csrf
        @method('DELETE')
            <div class="card-body content">
                <button type="submit" class="btndelete">定義削除</button>
            </div>
        </form>
    </div>
    @endforeach
    @else
    <h5 class="notinitiative">{{ Auth::user()->name }} さんの定義した言葉はありません</h5>
    @endif
</div>

@endsection