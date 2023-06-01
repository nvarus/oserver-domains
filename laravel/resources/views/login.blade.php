@extends('layout')

@section("main_content")
    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form class="flex-md-column align-items-center bg-info p-3 w-50 m-auto shad" method="post" action="form/check" style="display: flex; flex-direction: column; gap: 6px; width: 100%;">
    @csrf
    <div>
        <div>Email</div>
        <input class="bg-info" type="email" name="email" id="email" placeholder="Ваш E-mail"/>
    </div>
    <div>
        <div>Пароль</div>
        <input class="bg-info" type="password" name="password" id="password" placeholder="Ваш пароль"/>
    </div>
    <div>
        Запомнить меня
        <input type="checkbox" name="save" id="save">

    </div>
    <div>
    <button type="submit">Отправить</button>
    </div>
</form>
</body>
</html>
@endsection
