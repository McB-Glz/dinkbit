<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" id="js-mobile-menu">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ url('assets/img/logos/logo.png') }}" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li {{ Request::is('#que-hacemos') ? 'class=active' : '' }}><a href="{{ route('home').'/#que-hacemos' }}" class="js-scroll">¿Qué hacemos?</a></li>
        <li {{ Request::is('proyectos','proyectos/*') ? 'class=active' : '' }}><a href="{{ route('proyectos') }}">Proyectos</a></li>
        <li class="{{ Request::is('equipo') ? 'active' : '' }}"><a href="{{ route('equipo') }}">Equipo</a></li>
        <li {{ Request::is('contacto') ? 'class=active' : '' }}><a href="{{ route('contacto') }}">Contacto</a></li>
        {{-- <li ><a href="{{ route('blog') }}">Blog</a></li> --}}
        <li class="social"><a href="https://www.facebook.com/dinkbit" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class=""><a href="https://twitter.com/dinkbit" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class=""><a href="https://www.behance.net/dinkbit" target="_blank"><i class="fa fa-behance"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<nav class="mobile-menu">
    <div class="mobmen">
      <div class="mobile-btn1 border-bottom"><a href="{{ route('home').'/#que-hacemos' }}" class="button">¿Qué hacemos?</a></div>
      <div class="mobile-btn1 border-bottom"><a href="{{ route('proyectos') }}" class="button">Proyectos</a></div>
      <div class="mobile-btn1 border-bottom"><a href="{{ route('equipo') }}" class="button">Equipo</a></div>
      <div class="mobile-btn1 border-bottom"><a href="{{ route('contacto') }}" class="button">Contacto</a></div>
      {{-- <div class="mobile-btn1 border-bottom"><a href="{{ route('blog') }}" class="button">Blog</a></div> --}}
      <div class="mobile-btn1"><a href="https://www.facebook.com/dinkbit" target="_blank"><i class="fa fa-facebook fa-2x"></i></a><a href="https://twitter.com/dinkbit" target="_blank"><i class="fa fa-twitter fa-2x"></i></a><a href="https://www.behance.net/dinkbit" target="_blank"><i class="fa fa-behance fa-2x"></i></a></div>
    </div>
</nav>