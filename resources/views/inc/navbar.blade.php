<div class="nav">
    <div class="nav-container">
        @guest   
             <h3 class="title">Booking</h3>
        @else 
        <button class="navbar-toggler menu-btn navbar-toggler-right" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-th menu-icon"></i>
        </button>
        <h3 class="title">Dashboard</h3>
        
        <a href="/create" class="book-btn"> <i class="fas fa-calendar-plus"></i>
              Book Room</a>
         @endguest     
        <ul class="navbar-nav ml-auto float-right">
            <!-- Authentication Links -->
            @guest
                    <p>
                        <a class="btn btn-sm text-info" href="{{ route('login') }}">{{ __('Login') }}</a> |
                        <a class="btn btn-sm text-info" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </p>
            @else
                <li class="nav-item  pull-right dropdown">
                    <a id="navbarDropdown " class="nav-link user dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user-circle"></i>
                            {{ Auth::user()->first_name }} 
                            <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        
    </div>
</div>
@guest

@else
    <div class="messages-container">@include('inc.messages')</div>
@endguest