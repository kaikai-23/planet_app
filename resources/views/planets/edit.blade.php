<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>惑星情報登録</h1>

    @if($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    

    <form action="/planets/{{ $planet->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="jname">名前</label>
            <input type="text" name="jname" value="{{ old('jname', $planet->jname) }}">
        </p>
        <p>
            <label for="ename">名前(英語)</label>
            <input type="text" name="ename" value="{{ old('ename', $planet->ename) }}">
        </p>
        <p>
            <label for="radius">半径</label>
            <input type="int" name="radius" value="{{ old('radius', $planet->radius) }}">
        </p>
        <p>
            <label for="weight">重量</label>
            <input type="int" name="weight" value="{{ old('weight', $planet->weight) }}">
        </p>
        <input type="submit" value="更新"><br>
        <a href="/planets">戻る</a>
    </form>
</body>
</html>
