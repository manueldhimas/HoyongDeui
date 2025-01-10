<!--- #HEADER-->
<div class="container">

    <h1>
        <a href="{{url('/')}}" class="logo">HoyongDeui</a>
    </h1>

    <nav class="navbar" data-navbar>

        <div class="navbar-top">
            <a href="{{url('/')}}" class="logo">HoyongDeui</a>

            <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="navbar-list">

            <li class="navbar-item">
                <a href="{{url('/')}}" class="navbar-link" data-nav-toggler>Beranda</a>
            </li>

            <li class="navbar-item">
                <a href="{{route('produk.frontend')}}" class="navbar-link" data-nav-toggler>Produk</a>
            </li>

            <li class="navbar-item">
                <a href="{{route('cart.index')}}" class="navbar-link" data-nav-toggler>Keranjang</a> <!-- Perbarui link Keranjang -->
            </li>

            <li class="navbar-item">
                <a href="{{route('pesanan.frontend')}}" class="navbar-link" data-nav-toggler>Pesanan</a>
            </li>

            <li class="navbar-item">
                <a href="{{route('contact.frontend')}}" class="navbar-link" data-nav-toggler>Kontak</a>
            </li>

        </ul>

    </nav>

    <div class="header-actions">

        <button class="header-action-btn" aria-label="Open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
        </button>

        <!-- Menampilkan tombol berdasarkan status login -->
        @guest
            <a href="{{ route('login') }}" class="header-action-btn login-btn">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                <span class="span">Masuk</span>
            </a>
        @else
            <div class="dropdown">
                <button class="header-action-btn dropdown-toggle" aria-label="User menu" data-dropdown-toggler>
                    <ion-icon name="person-circle-outline"></ion-icon>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="dropdown-item align-center">
                            <ion-icon name="speedometer-outline" aria-hidden="true"></ion-icon>
                            <span class="span">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="dropdown-item align-center">
                            <ion-icon name="log-out-outline" aria-hidden="true"></ion-icon>
                            <span class="span">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @endguest

        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
            <ion-icon name="menu-outline"></ion-icon>
        </button>

    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>

</div>

<style>
    .dropdown-item.align-center {
        display: flex;
        align-items: center;
    }
    
    .dropdown-item.align-center ion-icon {
        margin-right: 8px; /* Atur jarak antara ikon dan teks sesuai kebutuhan Anda */
    }
</style>
