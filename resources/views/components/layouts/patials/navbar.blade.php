    <nav class="main-header navbar navbar-expand">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu text-white">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('logo.svg') }}" class="user-image img-circle elevation-2" alt="Avatar">
                    <span class="d-none d-md-inline ">{{ Auth::user()?->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="{{ asset('logo.svg') }}" width="40px" class="img-circle elevation-2"
                            alt="User Image">
                        <p>
                            <small>{{ Auth::user()?->email }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                        this.closest('form').submit();"
                                class="btn btn-default btn-flat float-right">Déconnexion</a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
