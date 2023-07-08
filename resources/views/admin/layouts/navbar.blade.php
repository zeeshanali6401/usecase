<!doctype html>
<html lang="en">
  <head>
@stack('title')
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-2 pl-4 pr-4 sticky-top navbar-dark bg-dark">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="{{url('/')}}">
          {{-- <img
            src="{{asset('logo\logo.png')}}"
            height="40"
            alt="MDB Logo"
            loading="lazy"
            style="margin-top: -1px;"
          /> --}}
          ZS
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
          <img width="25px" height="20px" src="{{ asset('img/hm.png') }}" alt="img">
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">

          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if (Auth::check())
              @if (Auth::user()->type == 'admin')
                <li class="nav-item active"><a class="nav-link" href="#">Student</a></li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teacher<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Add</a></li>
                    <li><a class="dropdown-item" href="">List</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/add-notice">Add Notice</a></li>
              @endif
            @endif
            <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact us</a></li>
            @auth
            @endauth
          </ul>
          <!-- Left links -->

          <!-- Ritht links -->
            <div class="d-flex align-items-center">
              @if (Route::has('login'))
                <div class="hidden fixed sm:block">
                    @auth
                      <form class="mb-0" method="post" action="{{route('logout')}}" role="button">
                        @csrf
                        <span class="pr-4 text-success">Welcome <strong>{{Auth::user()->name}}</strong></span>
                        
                        <button class="btn btn-danger btn-sm" type="submit">Logout</button>
                      </form>
                @else
                      <a href="{{ route('login') }}" class="btn btn-success btn-sm text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-info btn-sm ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
              @endif
            </div>
          <!-- Ritht links -->
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </body>
</html>