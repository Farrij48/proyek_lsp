<a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa  me-3"><img src="{{ asset('assets/img/logo.png')}}" alt="Logo"></i>SMKN 1 Banyuwangi</h1>
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('beranda') }}" class="nav-item nav-link {{ Route::is('beranda') ? 'active' : '' }}">Beranda</a>
                        <a href="{{ route('profil') }}" class="nav-item nav-link {{ Route::is('profil') ? 'active' : '' }}">Profil</a>
                        <a href="{{ route('ekstrakulikuler') }}" class="nav-item nav-link {{ Route::is('ekstrakulikuler') ? 'active' : '' }}">Ekstrakulikuler</a>
                        <a href="{{ route('jurusan') }}" class="nav-item nav-link {{ Route::is('jurusan') ? 'active' : '' }}">Jurusan</a>
                        <a href="{{ route('galeri') }}" class="nav-item nav-link {{ Route::is('galeri') ? 'active' : '' }}">Galeri</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('profil') }}" class="dropdown-item">Profil</a>
                                <a href="{{ route('ekstrakulikuler') }}" class="dropdown-item">Ekstrakulikuler</a>
                                <a href="{{ route('jurusan') }}" class="dropdown-item">Jurusan</a>
                                <a href="{{ route('galeri') }}" class="dropdown-item">Galeri</a>
                            </div>
                        </div>
                        
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                </div>