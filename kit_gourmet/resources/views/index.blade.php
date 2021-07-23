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
    <header>
        <form action="/result" method="POST">
            @csrf
            <h1>KITグルメ</h1>
            <span>ジャンル</span>　<input type="text" id="junre" name="search[junre]">
            <span>検索範囲</span>　<select id="search_range" name="search[range]"></select>
            <span>表示順</span>　<select type="text" id="search_sort" name="search[sort]"></select>
            <span>表示件数</span>　<input type="text" id="result_count" name="search[count]">
            <input type="submit" value="検索">
        </form>
    </header>
</body>
</html>
