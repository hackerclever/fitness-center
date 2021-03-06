<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">Fitness</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">

        @if (Route::has('login'))
            @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register/create') }}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/customer/table') }}">Customer List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/customer/checkin') }}">Checkin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/booking/create') }}">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/course/create') }}">Create Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/typeClass/create') }}">Create Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/promotion/create') }}">Promotion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/voucher/create') }}">Voucher</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/promotion/show') }}">Promotion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/typeClass/show') }}">Classes</a>
            </li>
            @endif
        @endif
    </ul>


      @if (Route::has('login'))
          @if (Auth::check())
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               {{ Auth::user()->name.":".Auth::user()->typeUser->role }} <span class="caret"></span>
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                   Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
             </div>
           </li>
           @if (Auth::user()->typeUser->role=='Admin')
           <li class="nav-item">
               <a class="nav-link" href="{{ url('/register') }}">Register</a>
           </li>
           @endif

        </ul>

          @else

            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/login') }}">Login</a>
              </li>

            </ul>

          @endif
     @endif

  </div>
</nav>
