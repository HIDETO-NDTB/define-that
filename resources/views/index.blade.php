@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card index">
                <div class="card-header titleEx">◯◯の定義<span>の定義</span></div>
                <div class="card-body content">
                    <h5>◯◯の定義を見て暇潰しすることは誰にでもできるし一人でも多くの方に見て欲しい<span>けど</span>できれば会員登録して投稿や「いいね」も押して欲しい。踊る暇人に見る暇人、同じ暇なら・・</h5>
                    <h6>◯◯の定義 管理者</h6>
                    <h5 class="favorites">いいね！ 10000</h5>                  
                </div>
            </div>
        </div>
    </div>
</div>

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
                    
                        @if((Auth::check())&&($define->user_id!=Auth::user()->id))
                            @if (Auth::user()->is_favorite($define->id))
                            <form action="{{ route('favorites.unfavorite',['id'=>$define->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="good" type="submit"><img class="good" src="{{ secure_asset('app/img/good.png') }}">取消し</button>
                            </form>
                            @else
                            <form action="{{ route('favorites.favorite',['id'=>$define->id]) }}" method="POST">
                            @csrf
                                <button class="good" type="submit"><img class="good" src="{{ secure_asset('app/img/good.png') }}">いいね！</button>
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