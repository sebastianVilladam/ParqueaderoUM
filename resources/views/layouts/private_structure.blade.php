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
          <img src="img/man.png" id="user-photo">
          <p class="text-center">{{ Auth::user()->name }}</p>
          <li><a href="{{route('fav', auth()->id())}}">FAVORITOS</a></li>
          <li><a href="{{route('acountSettings', auth()->id())}}">DATOS DE CUENTA</a></li>
          <li><a href="{{route('vehicles', auth()->id())}}">MIS VEHICULOS</a></li>
          <li><a href="/">HOME</a></li>
          <li><a href="/parking">PARKING</a></li>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">CERRAR SESION</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>
      </nav>

      <!--page content-->
      <main>
        <section>
          @yield('content')
        </section>
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
      </script>
    </div>
  </body>
</html>
