<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('links')
    <link rel="stylesheet" href="/css/pStructure_Style.css">
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #1a1a1a;">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: #fa0140">ParqueaderosUM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link"  href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/parking">Parking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Incicar sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Registrarse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')

    <!--footer-->
    <footer>
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-4">
            <img src="img/man.png" id="developerPhoto">
          </div>
          <div class="col-md-4">
            <p>Sebastian Villada M. Estudiante de Ingenieria de sistemas
            delaUniversidad Autonoma de Manizales</p>
          </div>
          <div class="col-md-4">
            <h1>Contacto</h1>
            <hr>
            <h3>Tel:555-555-555</h3>
            <h3>whatever@gmail.com</h3>
            <h3>Manizels,Caldas</h3>
          </div>
        </div>
      </div>
    </footer>
  </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
