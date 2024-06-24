<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="/user/{{$user_id}}">
        @csrf
        @method('delete')
        <input type="submit" onclick="Boton1()" value="Eliminar"> 
    </form>
<script>
    function Boton1(){
        alert("Nombre Eliminado");
    }
</script>

    <div>
        <h1>Nombre: {{ $nombre }}</h1>
    </div>
    
</body>
</html>