<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    
</head>
<body>
    <div id="app">
     
<b-navbar toggleable="lg" type="dark" variant="primary">
    <b-navbar-brand href="{{url('/')}}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
    <b-navbar-toggle target="nav_collapse" ></b-navbar-toggle>

    <b-collapse is-nav id="nav_collapse">
     

       <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
          @guest
      <b-nav-item  href="{{ route('login') }}">{{ __('Login') }}</b-nav-item>
      <b-nav-item  href="{{ route('register') }}">{{ __('Register') }}</b-nav-item>
          
     @else
        <b-nav-item-dropdown right>
          <!-- Using button-content slot -->
          <template slot="button-content">Username</template>
          <b-dropdown-item href="#">Cerrar sesión</b-dropdown-item>         
        </b-nav-item-dropdown>
    
     @endguest
      </b-navbar-nav>
    

    
    </b-collapse>
  </b-navbar>
       
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
