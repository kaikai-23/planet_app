<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h2>名前 : {{ $planet->jname }}</h2>
    <br>
    <h2>名前(英語) : {{ $planet->ename }}</h2>
    <br>
    <h2>半径 : {{ $planet->radius }}</h2>
    <br>
    <h2>重量 : {{ $planet->weight }}</h2>
    <br>
    <a href='/planets'>戻る</a>
</body>

</html>
