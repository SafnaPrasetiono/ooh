<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="safna prasetiono">
    <meta name="description"
        content="Kerjajepang.com merupakan platform dari PT, LPK dan LKP. Saat ini kami sedang mempunyai SO (Sending Organization) untuk ikut berkontribusi dalam program magang/jisshuusei. kerjajepang.com berdiri sejak tahun 2022 dan telah mensupport ratusan siswa/siswi untuk sekolah di Jepang. Selain itu, kerjajepang.com juga men-support pemuda/pemudi Indonesia yang optimis dan memiliki semangat tinggi untuk bekerja di Jepang.">
    <meta name="keywords"
        content="kerja jepang, kerja di jepang, cari kerja di jepang, cara kerja di jepang, lowongan kerja di jepang, kerja di negara jepang, lowongan kerja jepang, cara melamar kerja untuk di jepang, pelatihan kerja di jepang, pekerjaan di jepang, lowongan jepang, cara daftar kerja di jepang, cara daftar pekerjaan di negara jepang, pertukaran pekerja jepang">
    <link rel="alternate" type="application/rss+xml" title="Platform lowongang kerja jepang terbaik di indonesia.">

    <meta name="msapplication-navbutton-color" content="#dd894c" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#dd894c" />
    <link rel="icon" type="image/png" href="{{asset('/images/logo/ooh.png')}}" />

    @yield('head')
    <link rel="stylesheet" href="{{ url('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/index.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/splide/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/owl/css/owl.carousel.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('index') }}">
                <img src="{{ url('/images/logo/oohlogo.png') }}" alt="" height="46px" style="margin-top: -4px">
                <div class="ms-3 navbar-brand-text">
                    <p class="navbar-text text-dark">Work and Holiday</p>
                    <small class="navbar-text-small text-secondary">PT OOH Kupu Kupu Global</small>
                </div>
            </a>
            <button class="btn px-3 d-inline d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSlider">
                <i class="fas fa-bars fa-sm fa-fw"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSlider">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navService" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pelayanan
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navService">
                            <li><a class="dropdown-item" href="{{ route('service.ntfarmer') }}">NT Farmer</a></li>
                            <li><a class="dropdown-item" href="{{ route('service.hospitality') }}">Hospitality</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('training') }}">Pelatihan</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="{{ route('aboutme') }}">Tentang Kami</a>
                    </li>
                    @auth('user')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle"
                                src="{{ url('/images/avatar/user/' . auth('user')->user()->avatar) }}" alt="user"
                                width="28px" height="28px">
                            <span class="text-capitalize">
                                {{ auth('user')->user()->username }}
                            </span>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.lamaran') }}">Lamaran Saya</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.setting') }}">Peraturan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="btnLogout dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item d-inline d-lg-none">
                        <a class="nav-link link-primary" href="{{ route('register') }}">Daftar</a>
                    </li>
                    <li class="nav-item d-inline d-lg-none">
                        <a class="nav-link link-primary" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}"
                            class="btn btn-outline-danger rounded-pill d-none d-lg-inline-block px-4 mx-2">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-danger rounded-pill d-none d-lg-inline-block px-4">Masuk</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <section>
        @yield('pages')
    </section>

    <footer class="bg-danger">
        <div class="py-5">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 col-lg-8">
                        <div class="text-white mb-4">
                            <span class="fw-bold fs-5 fw-bold">OOH Work and Holiday</span>
                            <hr class="soft" width="50px">
                            <div class="pe-0 pe-md-5">
                                <p>Website ooh.co.id dibuat untuk memberikan kemudahan bagi calon pekerja migran Indonesia khususnya Bali untuk memberikan informasi terbaru seputar Job di Australia dan mempermudah dalam pendaftaran kandidat mengenai penyaluran pekerja migran ke Australia dari Provinsi Bali, Nasional, maupun Internasional</p>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-phone fa-fw"></i>
                                    <p class="mb-0 ms-2">+62 813-1173-6178</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <p class="mb-0 ms-2">info@ooh.co.id</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-map-marked fa-fw"></i>
                                    <p class="mb-0 ms-2">Jl. Tukad Yeh Aya No.116, Dauh Puri Klod, Denpasar Selatan, Kota Denpasar, Bali 80234</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="text-white">
                            <span class="fw-bold fs-5">Terupdate</span>
                            <hr class="soft" width="50px">
                            <nav class="nav flex-column">
                                <a class="nav-link link-light px-0" href="#">NT Farmer</a>
                                <a class="nav-link link-light px-0" href="#">Hospitality</a>
                                <a class="nav-link link-light px-0" href="#">Blog Terbaru</a>
                                <a class="nav-link link-light px-0" href="#">Events</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="text-white">
                            <span class="fw-bold fs-5">Link Terkait</span>
                            <hr class="soft" width="50px">
                            <nav class="nav flex-column">
                                <a class="nav-link link-light px-0" href="#">Register</a>
                                <a class="nav-link link-light px-0" href="#">Kebijakan Privasi</a>
                                <a class="nav-link link-light px-0" href="#">Syarat & Ketentuan</a>
                                <a class="nav-link link-light px-0" href="#">Tentang Kami</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-white">
                            <span class="fw-bold fs-5 fw-bold">Social Media</span>
                            <hr class="soft" width="50px">
                            <nav class="nav">
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://www.facebook.com/Kerja-Jepang-100105092698657">
                                    <img src="{{ url('/images/icons/facebook.png') }}" alt="facebook"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://twitter.com/KerjaJepang_">
                                    <img src="{{ url('/images/icons/twitter.png') }}" alt="twitter"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://www.instagram.com/kerjajepang_/">
                                    <img src="{{ url('/images/icons/instagram.png') }}" alt="instagram"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://www.tiktok.com/@kerjajepang.com">
                                    <img src="{{ url('/images/icons/tiktok.png') }}" alt="facebook"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://www.youtube.com/channel/UCaqh1IX07zFrbEy7_D0wS3w">
                                    <img src="{{ url('/images/icons/youtube.png') }}" alt="youtube"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2" style="background-color: #b72020">
            <div class="container py-1">
                <div class="text-center text-white py-1">
                    <small>Suported by PT. OOH KUPU KUPU GLOBAL</small>
                </div>
            </div>
        </div>
    </footer>

    <div class="menu-balloon">
        <a class="btn btn-menu-fixed" href="https://api.whatsapp.com/send?phone=6281311736178" target="_blank">
            <i class="fab fa-whatsapp fa-2x fa-fw"></i>
        </a>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ url('/dist/style/js/popper.js') }}"></script>
    <script src="{{ url('/dist/app/js/app.js') }}"></script>
    <script src="{{ url('/dist/style/js/alert.js') }}"></script>
    <script src="{{ url('/dist/style/js/index.js') }}"></script>
    <script src="{{ url('/dist/style/js/user/index.js') }}"></script>
    <script src="{{ url('/dist/splide/js/splide.min.js') }}"></script>
    <script src="{{ asset('/dist/owl/owl.carousel.min.js') }}"></script>
    @livewireScripts
    @yield('script')

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Good Jobs!',
            text: '{{ session()->get("success") }}',
        })
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: '{{ session()->get("error") }}',
        })
    </script>
    @endif
</body>

</html>