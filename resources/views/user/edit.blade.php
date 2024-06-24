<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/user"> Listado </a>
    <div>
        <form method="POST" action="/user/{{$user_id}}">
                @csrf
                @method("PUT")
                <input type="text" id="nombre" name="nombre" value="{{old ('nombre', $nombre)}}"/><br>
                <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>