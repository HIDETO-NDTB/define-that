@extends('layouts.app')

@section('content')
<div class="container">
    <h4>投稿</h4>
    <form action="{{ route('definestore') }}" method="POST">
    @csrf
        <div class="form-group">
            <label>タイトル（20文字以内）</label>
            <input type="text" name="title" id="textBox" placeholder="タイトルを入力下さい" value="">
            <span>の定義</span>
            <div id="count">入力文字数: <span class="showCnt">0</span></div>
        </div>
        <script>
            $('#textBox').keyup(function() {
            let cnt = $(this).val().length;
            $('.showCnt').text(cnt);
            });
        </script>                
        <div class="form-group">
            <label>内容（50文字以内）</label>
            <textarea name="content1" id="textBox2" rows="3" class="form-control" placeholder="内容を入力下さい"></textarea>
            <div id="count">入力文字数: <span class="showCnt2">0</span></div>
        </div>
        <script>
            $('#textBox2').keyup(function() {
            let cnt = $(this).val().length;
            $('.showCnt2').text(cnt);
            });
        </script>
        <div class="form-group">
            <select name="connect_id" style="width: 150px;">
                <option value="1">だけど</option>
                <option value="2">けど</option>
                <option value="3">というが</option>
                <option value="4">が、しかし</option>
                <option value="5">ではなく</option>
            </select>
        </div>
        <div class="form-group">
            <label>内容（50文字以内）</label>
            <textarea name="content2" id="textBox3" rows="3" class="form-control" placeholder="内容を入力下さい"></textarea>
            <div id="count">入力文字数: <span class="showCnt3">0</span></div>
        </div>
        <script>
            $('#textBox3').keyup(function() {
            let cnt = $(this).val().length;
            $('.showCnt3').text(cnt);
            });
        </script>
        @if(Auth::check())
            <div class="form-group">
                <button type="submit" class="btndefine">定義発表</button>
            </div>
        @else
            <h5 class="user">定義の発表はユーザー限定です。ログインの上で発議下さい。</h5>
        @endif
    </form>
</div>
@endsection