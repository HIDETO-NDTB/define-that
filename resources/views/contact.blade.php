@extends('layouts/app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="contact">お問い合わせフォーム</h3>
            <p>◯◯の定義をご利用頂き、誠にありがとうございます。<br>皆様より頂戴した貴重なご意見は今後の運営に活かして参ります。</p>
            <form action="{{ route('contactstore') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>カテゴリ</label><br>
                    <select name="category" style="width: 300px;">
                        <option value="define">◯◯の定義に関するお問い合わせ</option>
                        <option value="problem">不具合報告</option>
                        <option value="business">ビジネスに関するお問い合わせ</option>
                        <option value="others">その他のお問い合わせ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>氏名</label><br>
                    <input type="text" name="name" stile="width: 300px">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>お問い合わせ内容（２００文字以内）</label>
                    <textarea name="content" id="contact" cols="30" rows="10" class="form-control" placeholder="内容を入力下さい"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btnContact">送信する</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
