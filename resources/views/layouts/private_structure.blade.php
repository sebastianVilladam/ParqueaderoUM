<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/prStructure_Style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    @yield('links')
  </head>
  <body>
    <div id="wrapper">
      <!--side navbar-->
      <nav class="menu-activea">
        <h1>NAVBAR</h1>
        <ul>
          <li>HOME</li>
          <li>GALLERY</li>
          <li>TEAM</li>
          <li>SERVICES</li>
          <li>ABOUT</li>
          <li>WORK</li>
          <li>FAQ</li>
        </ul>
      </nav>

      <!--<div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li><a href="#" class="btn-close"onclick="closeSlideMenu()">&times;</a></li>
          <img src="img/man.png" id="user-photo">
          <li><a href="#">Favoritos</a></li>
          <li><a href="#">Datos de cuenta</a></li>
          <li><a href="#">Parking</a></li>
          <li><a href="#">Cerrar sesion</a></li>
          <br>
          <li>
            <div class="text-center">
              <p>Sebastian villada</p>
              <p>Ing.Sistemas</p>
              <p>Universida Autonoma</p>
              <p>de Manizales</p>
            </div>
          </li>
        </ul>
      </div>-->

      <!--page content-->
      <main>
        <!--<a href="#" class="btn btn-success" id="menu-toggle" onclick="openSlideMenu()">Toggle menu</a>-->
        @yield('content')
      </main>
      <script>
      (function()
      {
        var nav = $('nav'),
          menu = $('nav h1'),
          main = $('main'),
          open = false,
          hover = false;

        menu.on('click', function()
        {
          open = !open ? true : false;
          nav.toggleClass('menu-active');
          main.toggleClass('menu-active');
          nav.removeClass('menu-hover');
          main.removeClass('menu-hover');
          console.log(open);
        });
        menu.hover(
          function()
          {
            if (!open)
            {
              nav.addClass('menu-hover');
              main.addClass('menu-hover');
            }
          }, function()
          {
            nav.removeClass('menu-hover');
            main.removeClass('menu-hover');
          }
        );
      })();

      /*
        function openSlideMenu()
        {
          document.getElementById('sidebar-wrapper').style.width = '250px';
          document.getElementById('main').style.marginLeft = '250px';
        }

        function closeSlideMenu()
        {
          document.getElementById('sidebar-wrapper').style.width = '0';
          document.getElementById('main').style.marginLeft = '0';
        }*/
      </script>
    </div>
  </body>
</html>
