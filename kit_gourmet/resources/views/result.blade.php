<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <script src="{{ asset('js/index.js') }}"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <a href="/">検索画面に戻る</a>
    <header>
        <h1>検索内容</h1>
        <h2>ジャンル {{ $responses[0] }}</h2>
        <h2>検索範囲 {{ $responses[1] }}</h2>
        <h2>表示順 {{ $responses[2] }}</h2>
        <h2>表示件数 {{ $responses[3] }}件</h2>
    </header>
    <div id="result">
        <h1>検索結果</h1>
        @foreach($responses[4]["shop"] as $shop)
            <h2>店名 {{ $shop["name"]}}</h2>
            <h2>住所 {{ $shop["address"]}}</h2>
            <img src="{{ $shop['logo_image'] }}" alt="ロゴ">
        @endforeach
    </div>
</body>
</html>
