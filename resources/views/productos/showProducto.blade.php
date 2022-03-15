<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Informacion del Producto</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Marca</th>
            <th>Talla</th>
            <th>Imagen</th>

        </tr>
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->marca}}</td>
            <td>{{$producto->tipo}}</td>
            <td>
                <div align="center"> <img src= {{ $producto->url }} " width="270" height="280"></div>
            </td>
        </tr>
    </table>
    <a href="/producto">Regresar</a>

</body>
</html>
