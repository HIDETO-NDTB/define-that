<div id="copyrights">
    <div class="container">
        <p>
            &copy; Copyrights <strong>◯◯の定義</strong>. All Rights Reserved
        </p>
    </div>
</div>
<!-- bottom navigation -->
<nav class="fixed-bottom">
    <div class="bottom-menu">
        <a href="{{ route('initiative') }}"><img src="{{ secure_asset('app/img/initiative.png') }}">投稿する</a>
    </div>
    <div class="bottom-menu">
        <a href="{{ route('popular') }}"><img src="{{ secure_asset('app/img/hot.png') }}">人気順</a>
    </div>
    <div class="bottom-menu">
        <a href="{{ route('created') }}"><img src="{{ secure_asset('app/img/poplar.png') }}">投稿順</a>
    </div>
    <div class="bottom-menu">
        <a href="{{ route('legend') }}"><img src="{{ secure_asset('app/img/king.png') }}">殿堂入り</a>
    </div>
</nav>