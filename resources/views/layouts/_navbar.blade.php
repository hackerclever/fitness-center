<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    </div>



    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li><a href="{{ url('/singers') }}">Singers</a></li> -->



        @if (Route::has('login'))
            @if (Auth::check())
                <li><a href="{{ url('/customer') }}">Customer</a></li>
                <li><a href="{{ url('/customer/book') }}">Booking Trainer</a></li>
                <li><a href="{{ url('/customer/table') }}">All Customer</a></li>
            @endif
        @endif
     </ul>
     <ul class="nav navbar-nav navbar-right top-right">
         @if (Route::has('login'))
             @if (Auth::check())
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <ul class="dropdown-menu" role="menu">
                     <li>
                         <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Logout
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>
                 </ul>
             </li>
             @else
                 <li><a href="{{ url('/login') }}">Login</a></li>
                 <li><a href="{{ url('/register') }}">Register</a></li>
             @endif
        @endif
     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
