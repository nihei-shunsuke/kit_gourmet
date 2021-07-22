<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>KITグルメ</h1>
        <span>ジャンル</span>　<input type="text" id="junre" >
        <span>検索範囲</span>　<select id="search_range" ></select>
        <span>表示件数</span>　<input type="text" id="result_count">
        <input type="button" value="検索" onclick="search()">
    </header>
    <div id="result"></div>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
