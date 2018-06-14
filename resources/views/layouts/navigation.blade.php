<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">Opties <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a ui-sref="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">{{ __('Uitloggen') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                                </form>
                            </li>
                    </ul>
                </div>
                <div class="logo-element">
                    KPC
                </div>
            </li>
            
            <li class="active">
                <a href="{{ url('/main') }}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Personeel</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/perszoeken') }}">Zoeken</a></li>
                    <li><a href="{{ url('/registratie') }}">Registreren</a></li>
                </ul>
            </li>
            
            <li>
                <a href=""><i class="fa fa-pencil"></i> <span class="nav-label">Mutaties</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/vakantie') }}">Vakantie</a></li>
                    <li><a href="{{ url('/verzuim') }}">Verzuim</a></li>
                    <li><a href="{{ url('/overtime') }}">Overtime</a></li>
                </ul>
            </li>
            
            <li>
                <a href="{{ url('/minor') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
            </li>
            
        </ul>

    </div>
</nav>
