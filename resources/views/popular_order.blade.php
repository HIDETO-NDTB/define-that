@extends('layouts.app')
@section('content')

@foreach($popularDefines as $popularDefine)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card index">
                <div class="card-header title">{{ $popularDefine->title }}<span>の定義</span></div>
                <div class="card-body content">
                    <h5>{{ $popularDefine->content1 }}<span>{{ $popularDefine->connect->title }}</span>{{ $popularDefine->content2 }}</h5>
                    <h6>{{ $popularDefine->user->name }}</h6>
                    <h5 class="favorites">いいね！ {{ $popularDefine->favorite_users->count() }}</h5>
                    
                        @if((Auth::check())&&($popularDefine->user_id!=Auth::user()->id))
                            @if (Auth::user()->is_favorite($popularDefine->id))
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
        </div>
    </div>
</div>
@endforeach

@endsection