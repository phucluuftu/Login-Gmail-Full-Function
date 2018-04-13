    <div class="nav top-nav">
        <div class="dropdown top-left-menu">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-bars"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="https://it-center.seagroup.com/">IT Center</a>
                <a class="dropdown-item" href="https://gts.garenanow.com/">GTS Ticket</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </div>
        <a href="{{url('tickets')}}" class="logo">
                <span class="wrapper">
                   <img src="https://gts.garenanow.com/static/media/logo.b5ab4e3e.png" alt=""> GOP Ticket
                </span>
        </a>
        <div class="action">
            <div class="wrapper">
                <a href="{{url('tickets/create')}}"><button type="button" class="btn btn-danger">Create Ticket</button></a>
                <button type="button" class="btn btn-primary">Search</button>
            </div>
        </div>
        <div class="right-info float-right">
            <div class="wrapper">
                <div class="dropdown user display-inline-block">
                    <button type="button" class="btn dropdown-toggle username" data-toggle="dropdown">
                            <span class="wrapper">
                                <img class="avatar"
                                     src="{{ Auth::user()->avatar }}"
                                     alt=""> <span>{{ Auth::user()->name }}</span>
                            </span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">{{ Auth::user()->email }}</a>
                        <a class="dropdown-item logout" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        <i class="fas fa-sign-out-alt"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
