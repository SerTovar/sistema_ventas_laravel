{{--

  ____          _____               _ _           _
 |  _ \        |  __ \             (_) |         | |
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |
        |___/                               |___/

    Blog:       https://parzibyte.me/blog
    Ayuda:      https://parzibyte.me/blog/contrataciones-ayuda/
    Contacto:   https://parzibyte.me/blog/contacto/

    Copyright (c) 2020 Luis Cabrera Benito
    Licenciado bajo la licencia MIT

    El texto de arriba debe ser incluido en cualquier redistribucion
--}}
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{env("APP_NAME")}}">
    <meta name="author" content="Parzibyte">
    <title>@yield("titulo") - {{env("APP_NAME")}}</title>
    <link href="{{url("/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{url("/css/all.min.css")}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="{{url("/sss/sss.min.js")}}"></script><link rel="stylesheet" href="{{url("/sss/sss.css")}}" type="text/css" media="all">
    <script>jQuery(function($) {$('.slider').sss();});</script>

    <style>
        body {
            padding-top: 70px;
            /*Para la barra inferior fija*/
            padding-bottom: 70px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" target="_blank" href="{{route("home")}}"><img src="{{url("/img/logo/logo-amoblando.svg")}}" height="80" width="200"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            id="botonMenu" aria-label="Mostrar u ocultar menú">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        Registro
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route("home")}}">Inicio&nbsp;<i class="fa fa-home"></i></a>
                </li>
                <li class="nav item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">Salas&nbsp;<i class="fa fa-couch"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route("productos.index")}}">Sofá Cama</a>
                        <a class="dropdown-item" href="{{route("productos.index")}}">Sofá</a>
                        <a class="dropdown-item" href="{{route("productos.index")}}">Sofá L</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">Alcobas&nbsp;<i class="fa fa-bed"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route("productos.index")}}">Camas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">Comedores&nbsp;<i class="fa fa-chair"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route("productos.index")}}">Juegos de Comedor</a>
                        <a class="dropdown-item" href="{{route("productos.index")}}">Mesas</a>
                        <a class="dropdown-item" href="{{route("productos.index")}}">Sillas</a>
                    </div>
                </li>
            <!--<li class="nav-item">
                    <a class="nav-link" href="{{route("vender.index")}}">Vender&nbsp;<i class="fa fa-cart-plus"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("ventas.index")}}">Ventas&nbsp;<i class="fa fa-list"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("usuarios.index")}}">Usuarios&nbsp;<i class="fa fa-users"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("clientes.index")}}">Clientes&nbsp;<i class="fa fa-users"></i></a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="{{route("clientes.index")}}">Contáctenos&nbsp;<i class="fa fa-users"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("clientes.index")}}">Iniciar Sesión&nbsp;<i class="fa fa-users"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("clientes.index")}}">Registrarse&nbsp;<i class="fa fa-users"></i></a>
                </li>
            @endguest
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <a href="{{route("logout")}}" class="nav-link">
                        Salir ({{ Auth::user()->name }})
                    </a>
                </li>
            @endauth
            <li class="nav-item">
                <a class="nav-link" href="{{route("soporte.index")}}">Soporte&nbsp;<i
                        class="fa fa-hands-helping"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("acerca_de.index")}}">Acerca de&nbsp;<i class="fa fa-info"></i></a>
            </li>
        </ul>
    </div>
</nav>
<script type="text/javascript">
    // Tomado de https://parzibyte.me/blog/2019/06/26/menu-responsivo-bootstrap-4-sin-dependencias/
    document.addEventListener("DOMContentLoaded", () => {
        const menu = document.querySelector("#menu"),
            botonMenu = document.querySelector("#botonMenu");
        if (menu) {
            botonMenu.addEventListener("click", () => menu.classList.toggle("show"));
        }
    });
</script>
<main class="container-fluid">
    @yield("contenido")
</main>
<footer class="px-2 py-2 fixed-bottom bg-dark">
    <span class="text-muted">Punto de venta en Laravel
        <i class="fa fa-code text-white"></i>
        con
        <i class="fa fa-heart" style="color: #ff2b56;"></i>
        por
        <a class="text-white" href="//parzibyte.me/blog">Parzibyte</a>
        &nbsp;|&nbsp;
        <a target="_blank" class="text-white" href="//github.com/parzibyte/sistema_ventas_laravel">
            <i class="fab fa-github"></i>
        </a>
    </span>
</footer>
</body>
</html>
