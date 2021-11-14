@php
$user = Auth::user()->profilPicture
@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand d-lg-flex align-items-center" href="/home">
            <img src="{{asset('img/mentora-logo.svg')}}" alt="" width="36" height="36" class="d-inline-block align-text-top"> Mentora
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto d-lg-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="/status-pemesanan">Status Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cari">Cari Mentor</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{asset("img/$user")}}" alt="" width="48" height="48"
                            class="d-inline-block align-text-top">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/profil">Edit Profil</a></li>
                        <li><a class="dropdown-item" href="/tambah-saldo">Saldo</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#logout" data-bs-toggle="modal"
                                data-bs-target="#logoutModal">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a href="logout"><button type="button" class="btn btn-primary">Logout</button></a>
            </div>
        </div>
    </div>
</div>