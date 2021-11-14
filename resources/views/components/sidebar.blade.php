<div class="col-3">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">My Profile</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
                <a href="/profil" class="nav-link link-dark {{Request::path()=='profil'?'active':''}}" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Edit Profile
                </a>
        </li>
        <li>
            <a href="/tambah-saldo" class="nav-link link-dark mt-2 {{Request::path()=='tambah-saldo'?'active':''}}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Saldo
            </a>
        </li>
        <li>
            <a href="/ganti-sandi" class="nav-link link-dark mt-2 {{Request::path()=='ganti-sandi'?'active':''}}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Ganti Password
            </a>
        </li>    
        </ul>
    </div>
</div>