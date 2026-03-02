<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Buku Tamu Digital')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
        :root {
            --gradient-primary: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            --gradient-secondary: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        /* Navbar Styling */
        .navbar-modern {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%) !important;
            box-shadow: 0 2px 20px rgba(30, 60, 114, 0.4);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .navbar-brand i {
            animation: bookFlip 3s ease-in-out infinite;
        }

        @keyframes bookFlip {
            0%, 100% { transform: rotateY(0deg); }
            50% { transform: rotateY(180deg); }
        }

        .nav-link {
            position: relative;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: all 0.3s ease;
            color: rgba(255, 255, 255, 0.85) !important;
        }

        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: white;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 70%;
        }

        .nav-link.active {
            color: white !important;
            font-weight: 600;
        }

        /* Dropdown Menu */
        .dropdown-menu {
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .dropdown-item {
            padding: 0.7rem 1.5rem;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white !important;
        }

        /* Footer Styling */
        .footer-modern {
            background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
            color: rgba(255, 255, 255, 0.8);
            padding: 3rem 0 1.5rem;
            margin-top: 5rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }

        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 0 0.3rem;
        }

        .footer-social a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        /* Mobile Responsive */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                padding: 1rem;
                border-radius: 10px;
                margin-top: 1rem;
            }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>

    @stack('css')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-modern sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <i class="bi bi-book-half fs-4"></i>
                <span>Buku Tamu Digital</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <!-- Menu untuk yang belum login -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/home') }}">
                                <i class="bi bi-house-door me-1"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">
                                <i class="bi bi-info-circle me-1"></i>
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}">
                                <i class="bi bi-image me-1"></i>
                                Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right me-1"></i>
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-primary ms-2 px-3 rounded-pill" href="{{ route('register') }}">
                                <i class="bi bi-person-plus me-1"></i>
                                Register
                            </a>
                        </li>
                    @else
                        <!-- Menu untuk yang sudah login -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                <i class="bi bi-speedometer2 me-1"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('tamu*') ? 'active' : '' }}" href="{{ route('tamu.index') }}">
                                <i class="bi bi-people me-1"></i>
                                Data Tamu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" href="{{ route('laporan') }}">
                                <i class="bi bi-file-earmark-text me-1"></i>
                                Laporan
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        <i class="bi bi-person me-2"></i>Profile
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-modern">
        <div class="container">
            <div class="row g-4">
                <!-- About Section -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold text-white mb-3">
                        <i class="bi bi-book-half me-2"></i>Buku Tamu Digital
                    </h5>
                    <p class="mb-3" style="color: rgba(255, 255, 255, 0.7);">
                        Sistem pencatatan tamu modern yang memudahkan proses pendataan pengunjung dengan cepat, akurat, dan efisien.
                    </p>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/dwikicauu/" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/dwikicauu/" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" title="Twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="mailto:fareldwiirawan@gmail.com" title="Email">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Menu Cepat</h6>
                    <ul class="list-unstyled footer-links">
                        @guest
                            <li class="mb-2">
                                <a href="{{ url('/') }}">
                                    <i class="bi bi-chevron-right me-1"></i>Home
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/about') }}">
                                    <i class="bi bi-chevron-right me-1"></i>About
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ url('/gallery') }}">
                                    <i class="bi bi-chevron-right me-1"></i>Gallery
                                </a>
                            </li>
                        @else
                            <li class="mb-2">
                                <a href="{{ route('dashboard') }}">
                                    <i class="bi bi-chevron-right me-1"></i>Dashboard
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('tamu.index') }}">
                                    <i class="bi bi-chevron-right me-1"></i>Data Tamu
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('laporan') }}">
                                    <i class="bi bi-chevron-right me-1"></i>Laporan
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>

                <!-- Features -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Fitur Utama</h6>
                    <ul class="list-unstyled" style="color: rgba(255, 255, 255, 0.7);">
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>Pencatatan Digital
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>Data Terorganisir
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>Akses Mudah
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>Ramah Lingkungan
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Kontak</h6>
                    <ul class="list-unstyled" style="color: rgba(255, 255, 255, 0.7);">
                        <li class="mb-2">
                            <i class="bi bi-envelope me-2"></i>
                            <small>fareldwiirawan@gmail.com</small>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-geo-alt me-2"></i>
                            <small>Indonesia</small>
                        </li>
                    </ul>
                </div>
            </div>

            <hr style="border-color: rgba(255, 255, 255, 0.1); margin: 2rem 0 1.5rem;">

            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <small style="color: rgba(255, 255, 255, 0.6);">
                        &copy; {{ date('Y') }} Buku Tamu Digital. All rights reserved.
                    </small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small style="color: rgba(255, 255, 255, 0.6);">
                        Dibuat oleh Farel Dwi Irawan
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Active link highlighting
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    @stack('js')
</body>

</html>