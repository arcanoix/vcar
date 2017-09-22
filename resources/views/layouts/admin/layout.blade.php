<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vimocar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    @yield('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

  <body class="content ltr">

      <!-- ///// Header ///// -->
      <div class="header header--fixed">
          <!-- ///// Header Left ///// -->
          <div class="header__left">
              <div class="only--mobile">
                  <div class="hamburger hamburger--collapse hamburger--mobile">
                      <div class="hamburger__box">
                          <div class="hamburger__inner"></div>
                      </div>
                  </div>
              </div>
              <div class="header__brand"><a class="brand__link" href="#">
                  {{-- <img class="brand__img" src="img/logo.png" alt="">
                  <img class="brand__img--mobile" src="img/logo-m.png" alt=""> --}}
                  <span class="brand__name">Vimocar</span></a></div>
              <div class="only--mobile">
                  <button class="btn header__btn--toggler" type="button"><i class="fa fa-ellipsis-v"></i></button>
              </div>
          </div>
          <!-- ///// Header Right /////-->
          <div class="header__right header__toggle">
              <div class="header__content">
                  <!-- ///// Hidden Search /////-->
                  <div class="header__search search--close">
                      <div class="search__group"><i class="search__icon fa fa-search"></i>
                          <input class="search__control form__control" type="text" placeholder="Search...">
                          <button class="btn search__btn--close" type="button"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <!-- ///// Content Left /////-->
                  <div class="content__left">
                      <div class="hamburger hamburger--collapse is--active sidebar--toggle">
                          <div class="hamburger__box">
                              <div class="hamburger__inner"></div>
                          </div>
                      </div>
                      <button class="btn btn__screen" type="button"><i class="fa fa-arrows-alt"></i></button>
                  </div>
                  <!-- ///// Content Right /////-->
                  <ul class="nav content__right">
                      <!-- ///// Notifications /////-->
                      {{-- <li class="nav__item">
                          <div class="notifications dropdown"><a class="dropdown__toggle notifications__dropdown nav__link" href="#" data-toggle="dropdown"><i class="notifications__icon fa fa-bell"></i><span class="only--mobile">notifications</span><span class="status status--pulse"></span></a>
                              <div class="dropdown__menu notifications__menu">
                                  <div class="notifications__header"><span class="notifications__title">latest notifications</span>
                                      <button class="btn btn--mute" type="button"><i class="fa fa-bell-slash"></i></button>
                                  </div>
                                  <ul class="notifications__content">
                                      <li class="notifications__wrapper list__group__item"><a class="notifications__item" href="#"> <span class="item__media"> <span class="notification__alert notification__alert--info"><i class="fa fa-info"></i></span></span><span class="item__content">
                            <h6 class="item__title">Information</h6>
                            <p class="item__desc">New product is available</p><span class="item__info">15 min ago</span></span>
                          <button class="btn notifications__btn--close" type="button"><i class="icon--close fa fa-times"></i></button></a></li>
                                      <li class="notifications__wrapper list__group__item"><a class="notifications__item" href="#"><span class="item__media"><img class="item__img" src="img/users/5.jpeg" alt=""></span><span class="item__content">
                                <h6 class="item__title">Cara Stevens</h6>
                                <p class="item__desc">share your post: Lorem ipsum dolor sit amet.</p><span class="item__info">30 min ago</span></span></a>
                                          <button class="btn notifications__btn--close" type="button"><i class="icon--close fa fa-times"></i></button>
                                      </li>
                                      <li class="notifications__wrapper list__group__item"><a class="notifications__item" href="#"> <span class="item__media"> <span class="notification__alert notification__alert--warning"><i class="fa fa-warning"></i></span></span><span class="item__content">
                            <h6 class="item__title">Warning</h6>
                            <p class="item__desc">DDos attack</p><span class="item__info">1 hour ago</span></span>
                          <button class="btn notifications__btn--close" type="button"><i class="icon--close fa fa-times"></i></button></a></li>
                                      <li class="notifications__wrapper list__group__item"><a class="notifications__item" href="#"><span class="item__media"><img class="item__img" src="img/users/14.jpeg" alt=""></span><span class="item__content">
                                <h6 class="item__title">Sakura Yamamoto</h6>
                                <p class="item__desc">Follow your profile on twitter</p><span class="item__info">7 hours ago</span></span></a>
                                          <button class="btn notifications__btn--close" type="button"><i class="icon--close fa fa-times"></i></button>
                                      </li>
                                  </ul>
                                  <div class="notifications__footer"><a class="notifications__link" href="#">sea all notifications</a></div>
                              </div>
                          </div>
                      </li> --}}

                      <li class="nav__item user dropdown nav__item--desktop"><a class="dropdown__toggle user__dropdown" href="#" data-toggle="dropdown">Bienvenido, {{ Auth::user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                          <div class="dropdown__menu user__menu">
                              {{-- <a class="dropdown__item user__link" href="#"> <i class="user__icon fa fa-user"></i>profile</a>
                              <a class="dropdown__item user__link" href="#"> <i class="user__icon fa fa-envelope"></i>inbox</a> --}}
                              <a class="dropdown__item user__link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="user__icon fa fa-sign-out"></i>Salir</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </div>
                      </li>
                      {{-- <li class="nav__item nav__item--mobile"><a class="nav__link" href="#"><i class="user__icon fa fa-user"></i>profile</a></li>
                      <li class="nav__item nav__item--mobile"><a class="nav__link" href="#"><i class="user__icon fa fa-envelope"></i>inbox				</a></li> --}}
                      <li class="nav__item nav__item--mobile"><a class="nav__link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="user__icon fa fa-sign-out"></i>Salir</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </ul>
              </div>
          </div>
      </div>

      <!-- ///// Page ///// -->
      <div class="page">
          <!-- ///// Sidebar Left /////-->
          <div class="sidebar__left">
              <div class="sidebar--bg"></div>
              <nav class="sidebar__nav sidebar__scroll">
                  <ul class="sidebar__menu">
                      <li class="sidebar__header">Menu Navegación</li>
                      <li class="sidebar__item"><a class="{{ Request::is('dashboard*') ? 'active' : '' }} sidebar__link link--single" href="/"><i class="link__icon fa fa-dashboard"></i><span class="link__name">Dashboard</span></a>
                      </li>
                      <li class="sidebar__item sidebar__dropdown"><a class="sidebar__link dropdown--collapse {{ Request::is('clientes*') ? 'active' : '' }}" href="#"><i class="link__icon fa fa-users"></i><span class="link__name">Clientes</span></a>
                          <ul class="sidebar__submenu dropdown--collapse">
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/clientes">Todos los Clientes</a>
                              </li>
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/clientes/create">Nuevo cliente</a>
                              </li>
                          </ul>
                      </li>

                      <li class="sidebar__item sidebar__dropdown"><a class="sidebar__link dropdown--collapse {{ Request::is('transportes*') ? 'active' : '' }}" href="#"><i class="link__icon fa fa-truck"></i><span class="link__name">Transportes</span></a>
                          <ul class="sidebar__submenu dropdown--collapse">
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/transportes">Todos los transportes</a>
                              </li>
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/transportes/create">Nuevo transporte</a>
                              </li>
                          </ul>
                      </li>

                      <li class="sidebar__item sidebar__dropdown"><a class="sidebar__link dropdown--collapse {{ Request::is('choferes*') ? 'active' : '' }}" href="#"><i class="link__icon fa fa-id-card"></i><span class="link__name">Choferes</span></a>
                          <ul class="sidebar__submenu dropdown--collapse">
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/choferes">Todos los choferes</a>
                              </li>
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/choferes/create">Nuevo Chofer</a>
                              </li>
                          </ul>
                      </li>

                      <li class="sidebar__item sidebar__dropdown"><a class="sidebar__link dropdown--collapse {{ Request::is('entregas*') ? 'active' : '' }}" href="#"><i class="link__icon fa fa fa-paper-plane-o "></i><span class="link__name">Entregas</span></a>
                          <ul class="sidebar__submenu dropdown--collapse">
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/entregas">Todos las entregas</a>
                              </li>
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/entregas/create">Nuevo Entrega</a>
                              </li>
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/entregas/incidencias">Incidencias</a>
                              </li>
                          </ul>
                      </li>

                      <li class="sidebar__item sidebar__dropdown"><a class="sidebar__link dropdown--collapse {{ Request::is('mantenimientos*') ? 'active' : '' }}" href="#"><i class="link__icon fa fa fa-gears "></i><span class="link__name">Mantenimientos</span></a>
                          <ul class="sidebar__submenu dropdown--collapse">
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/mantenimientos">Todos las mantenimientos</a>
                              </li>
                              <li class="sidebar__item">
                                  <a class="sidebar__link" href="/mantenimientos/create">Nuevo Mantenimiento</a>
                              </li>
                          </ul>
                      </li>

                    @role('administrador')
                      <li class="sidebar__header">Administración</li>
                      <li class="sidebar__item sidebar__dropdown"><a class="sidebar__link dropdown--collapse {{ Request::is('usuarios*') ? 'active' : '' }}" href="#"><i class="link__icon fa fa-magic"></i><span class="link__name">Usuarios</span></a>
                          <ul class="sidebar__submenu dropdown--collapse">
                              <li class="sidebar__item"><a class="sidebar__link" href="/usuarios">Todos los Usuarios</a>
                              </li>
                              <li class="sidebar__item"><a class="sidebar__link" href="/usuarios/create">Alta de Usuario</a>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar__item sidebar__dropdown"><a class="sidebar__link dropdown--collapse {{ Request::is('usuarios*') ? 'active' : '' }}" href="#"><i class="link__icon fa fa-magic"></i><span class="link__name">Log</span></a>
                          <ul class="sidebar__submenu dropdown--collapse">
                              <li class="sidebar__item"><a class="sidebar__link" href="/log">Registros</a>
                              </li>

                          </ul>
                      </li>
                     @endrole

                  </ul>
                  {{-- <div class="footer__sidebar text-center">
                      Realizado por Laravel
                  </div> --}}
              </nav>
          </div>
          <div class="page__content">
             @yield('content')
          </div>

      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/apps/cards.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.min.js') }}"></script>
    <script src="{{ asset('js/template-editor.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    @yield('js')

  </body>
</html>
