<?php

include 'global/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras Paypal</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand">Paypal</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Carrito (0)<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <br>
        <div class="alert  alert-success" role="alert">
            Pantalla de mensaje.....
            <a href="#" class="badge badge-success">Ver carrito</a>
        </div>
        <!------------------PRODUCTOS-------------------->
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php1.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php2.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php3.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php4.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php5.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php6.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php7.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img title="Titulo Producto" alt="Titulo" class="card-img-top" src="img/php8.jpg">
                    <div class="card-body">
                        <span>Titul del Producto</span>
                        <h5 class="card-title">$300.00</h5>
                        <p class="card-text">Descripcion</p>
                        <button class="btn btn-primary" name="btnAction" value="Agregar" type="submit">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

</body>

</html>