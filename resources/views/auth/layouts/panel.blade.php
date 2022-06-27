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
    <link rel="stylesheet" href="{{ url('/dist/style/css/animated.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/auth/auth.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body>

    @yield('pages')

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ url('/dist/style/js/popper.js') }}"></script>
    <script src="{{ url('/dist/app/js/app.js') }}"></script>
    <script src="{{ url('/dist/style/js/alert.js') }}"></script>
    @livewireScripts

    @yield('script')

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Good Jobs!',
            text: '{{ session()->get("success") }}',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: '{{ session()->get("error") }}',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
    @endif

</body>

</html>