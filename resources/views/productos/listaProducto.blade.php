<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
       <!--  <title>Shop Homepage - Start Bootstrap Template</title>
        Favicon-->
        <!--<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        Bootstrap icons-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Lista de productos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/producto">Incio</a></li>
                        <li class="nav-item"><a class="nav-link" href="/producto/create">Alta producto</a></li>
                        <li class="nav-item"><a class="nav-link" href="listaProducto">Lista productos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="colorblue py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Lista de Productos</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <div class="container px-4 px-lg-5 mt-5">
            <?php
            $i=0;
            $cantidad=count($productos);
            ?>
            @while ($i<$cantidad)
                <div class="row">
                    @for($j=0; $j<3 && $i<$cantidad; $i++, $j++)
                        <div class="col col-md">
                            <div class="card" style="width:17rem; margin-bottom: 20px;">
                                <img src={{$productos[$i]->url}} width="270" height="280">
                                <div class="card-body">
                                    <h5 class="card-title">{{$productos[$i]->nombre}}</h5>
                                    <p class="card-text">
                                        <ul class="list-group">
                                            <li class="list-group-item">Precio: {{$productos[$i]->precio}}</li>
                                            <li class="list-group-item">Marca: {{$productos[$i]->marca}}</li>
                                            <li class="list-group-item">Talla: {{$productos[$i]->tipo}}</li>
                                          </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            @endwhile
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>
