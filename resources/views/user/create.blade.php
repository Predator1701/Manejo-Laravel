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
        <form method="POST" action="/user">
                @csrf
                <div>
                    <label for="text"> Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{old ('nombre')}}"/><br>
                </div>
                
                <div> 
                    <label for="text">Email</label>
                    <input type="email" id="email" name="email" value="{{old('email')}}"/>
                </div>

                <div>
                    <label for="text">Contraseña</label>
                    <input type="password" id="password" name="password" value="{{old('password')}}"/>
                </div>
                <div>
                    <button>Guardar</button>
                </div>
        </form>
    </div>
</body>
</html>