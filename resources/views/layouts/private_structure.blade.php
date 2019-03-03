<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('links')
  </head>
  <body>
    <!--side navbar-->
    <span class="open-slide">
      <a href="#">
        <svg width="30" heigth="30">
          <path d="M0,5 30,5" stroke="#1a1a1a" stroke-width="5"/>
          <path d="M0,5 30,5" stroke="#1a1a1a" stroke-width="5"/>
          <path d="M0,5 30,5" stroke="#1a1a1a" stroke-width="5"/>
        </svg>
      </a>
    </span>

    @yield('content')
  </body>
</html>
