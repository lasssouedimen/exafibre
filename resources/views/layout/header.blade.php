<div id="right-panel" class="right-panel">
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
             <a class="navbar-brand"><img src="{{ asset('images') }}/{{$information->logo}}"
                    alt="Pas de photo" style=" object-fit: cover;width: 55%;height: 44%;"></a>
           <a class="navbar-brand hidden"><img src="{{asset('images')}}/{{$information->logo}}" alt="Logo2"></a> 
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    
                    

                  
                </div>
                @if (Auth::check() && Auth::user()->role == 0)
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="assets/img/icons/logotrans.png"
                            alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                       


                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fa fa-power-off"></i> Se déconnecter
                        </a>
                    </div>
                </div>
                @elseif(Auth::check() && Auth::user()->role == 1)
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="assets/img/icons/logotrans.png"
                            alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{ route('prof.index') }}"><i class="fa fa-user"></i>My Profile</a>


                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fa fa-power-off"></i> Se déconnecter
                        </a>
                    </div>
                </div>
                @endif

            </div>
        </div>
         <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </header>

    