@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card index">
                <div class="card-header titleEx">殿堂入り<span>の定義</span></div>
                <div class="card-body content">
                    <h5>感動でもお笑いでも真面目でも文学的でも何でもイイ<span>けど</span>いいねが100件以上の定義</h5>
                    <h6>◯◯の定義 管理者</h6>
                    <h5 class="favorites">いいね！ 10000</h5>                  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if($legendDefinesCount->favorite_users_count >=100)
            @foreach($legendDefines as $legendDefine)
            @if($legendDefine->favorite_users_count >=1)
                <div class="card index">
                    <div class="card-header title">{{ $legendDefine->title }}<span>の定義</span></div>
                    <div class="card-body content">
                        <h5>{{ $legendDefine->content1 }}<span>{{ $legendDefine->connect->title }}</span>{{ $legendDefine->content2 }}</h5>
                        <h6>{{ $legendDefine->user->name }}</h6>
                        <h5 class="favorites">いいね！ {{ $legendDefine->favorite_users->count() }}</h5>
                    
                        @if((Auth::check())&&($legendDefine->user_id!=Auth::user()->id))
                            @if (Auth::user()->is_favorite($legendDefine->id))
                            <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="good" type="submit"><img class="good" src="{{ secure_asset('app/img/good.png') }}">取消し</button>
                            </form>
                            @else
                            <form action="" method="POST">
                            @csrf
                                <button class="good" type="submit"><img class="good" src="{{ secure_asset('app/img/good.png') }}">いいね！</button>
                            </form>
                            @endif
                        @endif                   
                    </div>
                </div>
            @endif
            @endforeach
        @else
            <h5 class="notlegend">殿堂入りの定義はありません</h5>
        @endif
        </div>
    </div>
</div>


@endsection