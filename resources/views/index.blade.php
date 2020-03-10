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
                    <h5 class="favorites">いいね！ {{ $define->favorite_users->count() }}</h5>
                    <img class="share" src="{{ asset('app/img/share.png') }}">
                    
                        @if((Auth::check())&&($define->user_id!=Auth::user()->id))
                            @if (Auth::user()->is_favorite($define->id))
                            <form action="{{ route('favorites.unfavorite',['id'=>$define->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="good" type="submit"><img class="good" src="{{ asset('app/img/good.png') }}">取消し</button>
                            </form>
                            @else
                            <form action="{{ route('favorites.favorite',['id'=>$define->id]) }}" method="POST">
                            @csrf
                                <button class="good" type="submit"><img class="good" src="{{ asset('app/img/good.png') }}">いいね！</button>
                            </form>
                            @endif
                        @endif
                                  
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection