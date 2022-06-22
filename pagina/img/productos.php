<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" 
    crossorigin="anonymous">
    <!-- CSS only -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Pastelería SoB</title>
  </head>
  <body>

    <!-- ========================= -->
    <!-- ENCABEZADO -->
    <!-- ========================= -->
    
    <nav class="navbar navbar-expand-lg navbar-light p-3" id="menu">
        <div class="container">
            <a class="navbar-brand" href="">
              <span class="text-dark fs-5 fw-bold">Pastelería Sob</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
            aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nosotros.html">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="productos.php">Productos</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuario
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="inUsuario.html">Ingresar Usuario</a></li>
                    <li><a class="dropdown-item" href="reUsuario.html">Registrar Usuario</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Carrito de Compra
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#"> </a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </div>
      </nav>

    <!-- ========================= -->
    <!-- SLIDER DE IMAGENES -->
    <!-- ========================= -->
    
    <div id="carouselExampleControls" class="carousel slide" 
    data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active" data-bs-internal="3000">
          <img src="slide1.jpg" class="d-block w-100" alt="slide1">
        </div>

        <div class="carousel-caption">

          <h2>Somos expertos en la</h2>
          <p class="h2">creacion de pasteles</p>>
          <a href="#" class="btn btn-light">Realizar Pedido</a>

        </div>

        <div class="carousel-item" data-bs-internal="3000">
          <img src="slide2.jpg" class="d-block w-100" alt="slide2">
        </div>

        <div class="carousel-item" data-bs-internal="3000">
          <img src="slide3.jpg" class="d-block w-100" alt="slide3">
        </div>

      </div>
      
    </div>
    
    <!-- ========================= -->
    <!-- PIE DE LA PAGINA -->
    <!-- ========================= -->

    <footer class="w-100 d-flex align-items-center justify-content-center flex-wrap">
      <p class="fs-5 px-3 pt-3">Pastelería SoB &copy; Todos Los Derechos Reservados 2022</p>
      <div id="iconos">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>

    </footer>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>