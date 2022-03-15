<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
</head>
<body>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($producto)
        <form action="/producto/{{$producto->id}}" method="POST">
        @method('PATCH')
    @else
        <form action="/producto" method="POST">
    @endisset
    @csrf
	<div id="menu-alta-producto" class="container">
		<br><center>Alta de Producto</center>
		<br>
		<form>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nombre">Nombre producto</label>
		      <input type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre del producto" value={{isset($producto)?$producto->nombre : ''}}>
		    </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value={{isset($producto)?$producto->precio : ''}}>
            </div>
		  </div>
            <div class="form-group col-md-6">
                <label for="marca">Marca</label>
                <input type="text" class="form-control"name="marca"  id="marca" placeholder="Marca" value={{isset($producto)?$producto->marca : ''}}>
            </div>
		    <div class="form-group col-md-4">
		      <label for="tipo">Talla</label>
		      <select name="tipo" id="tipo" class="form-control">
		        <option value="chica" {{isset($producto)&&$producto->tipo=='chica'?'selected':''}} selected>chica</option>
		        <option value="mediana" {{isset($producto)&&$producto->tipo=='mediana'?'selected':''}}>mediana</option>
                <option value="grande" {{isset($producto)&&$producto->tipo=='grande'?'selected':''}}>grande</option>

		      </select>
		    </div>
			<div class="form-row">
			    <div class="form-group col-md-6">
                    <label for="url">Url</label>
                    <input type="text" class="form-control"name="url"  id="url" placeholder="Url" value={{isset($producto)?$producto->url : ''}}>
                </div>
			</div>
			<div class="form-row">
				<br>
				<button  style="margin-top: 10px;" id="agregar-pro" type="submit" class="btn btn-primary">Agregar</button>
			</div>
		</div>
		</form>
	</div>

</body>
</html>
