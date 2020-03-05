@extends('layouts.app')

@section('content')
<div class="container">
    <h4>投稿</h4>
    <form action="" method="POST">
    @csrf
        <div class="form-group">
            <label>タイトル（20文字以内）</label>
            <input type="text" name="title" class="form-control" id="textBox" placeholder="タイトルを入力下さい" value="">
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
            <textarea name="content" id="textBox2" rows="3" class="form-control" placeholder="内容を入力下さい"></textarea>
            <div id="count">入力文字数: <span class="showCnt2">0</span></div>
        </div>
        <script>
            $('#textBox2').keyup(function() {
            let cnt = $(this).val().length;
            $('.showCnt2').text(cnt);
            });
        </script>
        <div class="form-group">
            <select name="" style="width: 150px;">
                <option value="">だけど</option>
                <option value="">けど</option>
                <option value="">だが</option>
                <option value="">が、しかし</option>
                <option value="">だけれども</option>
            </select>
        </div>
        <div class="form-group">
            <label>内容（50文字以内）</label>
            <textarea name="content" id="textBox3" rows="3" class="form-control" placeholder="内容を入力下さい"></textarea>
            <div id="count">入力文字数: <span class="showCnt3">0</span></div>
        </div>
        <script>
            $('#textBox3').keyup(function() {
            let cnt = $(this).val().length;
            $('.showCnt3').text(cnt);
            });
        </script>
    </form>
</div>
@endsection