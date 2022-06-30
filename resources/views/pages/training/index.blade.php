@extends('layouts.panel')

@section('head')
<title>OOH Kupu Kupu Global - Pelatihan</title>
<meta name="keywords"
    content="daftar pelatihan ooh, daftar pelatihan ooh kupu kupu global, bagaimana cara mendaftar pelatihan di ooh,">
<style>
    .banner-elementor {
        background: #f85032;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #e73827, #f8d7da);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #e73827, #f8d7da);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .img-icons {
        width: 120px;
        margin: auto;
    }

    .elemtor-dana {
        background: rgb(0, 130, 255);
        background: linear-gradient(124deg, rgba(0, 130, 255, 1) 0%, rgba(6, 137, 241, 1) 75%, rgba(1, 123, 252, 1) 100%);
    }

    .btn-pills-menus{
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
    }
    .img-training{
        position: absolute;
        width: 100%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .btn-pills-menus:hover > .img-training{
        transform: scale(1.2s);
    }

    @media(max-width: 768px) {
        .banner-elementor {
            background: #f85032;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #e73827, #f8d7da);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #e73827, #f8d7da);
        }
    }
</style>
@endsection

@section('pages')
<div class="d-block w-100" style="height: 65px;"></div>
<div class="banner-elementor py-5">
    <div class="container pt-3 pb-4">
        <div class="row justify-content-center justify-content-md-start align-items-center gy-4">
            <div class="col-9 col-md-6 col-lg-5 order-1 order-md-2 mx-auto">
                <img src="{{ url('/images/elements/training-head-phone-lg.png') }}" alt="desi" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="text-center text-md-start ">
                    <p class="display-5 text-capitalize text-white mb-5">
                        PROGRAM PELATIHAN STANDAR AUSTRALIA
                    </p>
                    <a href="{{ route('training.register') }}"
                        class="btn btn-outline-light rounded-0 btn-lg px-5">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="d-block py-3 mb-3">
            <h2 class="fw-bold">Pelatihan Tersedia</h2>
            <p class="mb-o">Pelatiahan profesional PT. OOH Kupu Kupu Global</p>
        </div>
        <div class="row g-3 mb-5">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="btn-pills-menus">
                    <div class="d-flex justify-content-center align-items-center position-relative ratio ratio-21x9 rounded overflow-hidden shadow-sm">
                        <div class="img-training" style="background-image: url('/images/elements/training/bartender.png');">
                        </div>
                        <h3 class="fw-light text-white d-block position-relative p-3">Bartender</h3>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="btn-pills-menus">
                    <div class="d-flex justify-content-center align-items-center position-relative ratio ratio-21x9 rounded overflow-hidden shadow-sm">
                        <div class="img-training" style="background-image: url('/images/elements/training/housekeeping.png');">
                        </div>
                        <h3 class="fw-light text-white d-block position-relative p-3">Housekeeping</h3>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="btn-pills-menus">
                    <div class="d-flex justify-content-center align-items-center position-relative ratio ratio-21x9 rounded overflow-hidden shadow-sm">
                        <div class="img-training" style="background-image: url('/images/elements/training/waiters.png');">
                        </div>
                        <h3 class="fw-light text-white d-block position-relative p-3">Waiters</h3>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="btn-pills-menus">
                    <div class="d-flex justify-content-center align-items-center position-relative ratio ratio-21x9 rounded overflow-hidden shadow-sm">
                        <div class="img-training" style="background-image: url('/images/elements/training/fo.png');">
                        </div>
                        <h3 class="fw-light text-white d-block position-relative p-3">Reseptiont</h3>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="" class="btn-pills-menus">
                    <div class="d-flex justify-content-center align-items-center position-relative ratio ratio-21x9 rounded overflow-hidden shadow-sm">
                        <div class="img-training" style="background-image: url('/images/elements/training/cook.png');">
                        </div>
                        <h3 class="fw-light text-white d-block position-relative p-3">Cook</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- <div class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card py-3">
                    <div class="d-flex mb-2">
                        <img src="{{ url('/images/icons/belajar.png') }}" alt="" class="img-icons">
                    </div>
                    <div class="text-center px-3 py-2">
                        <p class="text-uppercase fs-5 mb-0 fw-bold">KARANTINA</p>
                        <p>pembelajaran dan disiplinan dengan budaya kerja Australia</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card py-3">
                    <div class="d-flex mb-2">
                        <img src="{{ url('/images/icons/sertifikat.png') }}" alt="" class="img-icons">
                    </div>
                    <div class="text-center px-3 py-2">
                        <p class="text-uppercase fs-5 mb-0 fw-bold">Sertifikat</p>
                        <p>Dapatkan sertifikat sesuai dengan bidang kerja dengan cara yang mudah</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card py-3">
                    <div class="d-flex mb-2">
                        <img src="{{ url('/images/icons/info.png') }}" alt="" class="img-icons">
                    </div>
                    <div class="text-center px-3 py-2">
                        <p class="text-uppercase fs-5 mb-0 fw-bold">Pembelajaran</p>
                        <p>Uji kemampuan kamu untuk bidang pekerjaan yang diminati</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="py-4">
    <div class="container">
        <div class="d-flex align-items-center mb-4">
            <div>
                <h4 class="fw-bold">Fasilitas yang didapatkan</h4>
                <p class="mb-0 text-secondary">Pastikan kamu dapat keuntungan lebih dari kerja jepang.com</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Asrama dan Makan</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Materi skill dan Wawancara (Mensetsu)</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Tenaga pengajar berpengalaman</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Pembelajaran menggunakan proyektor dan peralatan multimedia</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Bimbingan proses kerja sampai terbang GRATIS</span>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Ruang kelas full AC</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Akses Internet Wi-Fi gratis</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Musholla</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Modul, Buku-buku, Textbook, alat tulis, blocknote, Tas Keren</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Mendapatkan pengajar langsung dari jepang</span>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="py-5 alert-secondary">
    <div class="container py-3">
        <div class="d-block text-center mb-3">
            <p class="fs-5 fw-bold text-uppercase mb-0">PROGRAM PELATIHAN</p>
            <p class="card-text">Tingkatkan kemampuan kamu dan dapatkan sertifikat</p>
        </div>
        <div class="d-block text-center py-4">
            <div class="row justify-content-center g-4">
                <div class="col-6 col-md-4">
                    <p class="mb-1 fw-bold">Lama Belajar</p>
                    <p class="mb-0">90 Hari</p>
                </div>
                <div class="col-6 col-md-4">
                    <div class="">
                        <p class="mb-1 fw-bold">Durasi Belajar</p>
                        <p class="mb-0">8 Jam</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <p class="mb-1 fw-bold">Waktu Belajar</p>
                    <p class="mb-0">Sabtu - jum'at <br> 08.00–17.00 WIB</p>
                </div>
            </div>
        </div>
        <div class="d-block py-3">
            <div class="text-center">
                <a href="{{ route('training.register') }}" class="btn btn-outline-primary btn-lg px-5 rounded-0">Daftar
                    Sekarang</a>
            </div>
        </div>
    </div>
</div>

<div class="py-4 alert-danger">
    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <div>
                <h4 class="fw-bold">Bagaimana Cara Mendaftar</h4>
                <p class="mb-0 text-secondary">Yuk simak cara mendaftar untuk yang mengikuti pelatihan</p>
            </div>
            <div class="d-none d-md-flex justify-content-center justify-content-md-end ms-auto">
                <button class="customPrevBtn btn btn-outline-danger p-2 me-2" type="button">
                    <i class="fas fa-angle-left fa-lg fa-fw"></i>
                </button>
                <button class="customNextBtn btn btn-outline-danger p-2" type="button">
                    <i class="fas fa-angle-right fa-lg fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/daftar.png') }}" alt="2" class="w-50 mx-auto mb-3">
                        <p class="fs-5 fw-bold text-center">KLIK DAFTAR</p>
                        <p class="card-text">
                            Pada halaman ini terdapat button daftar di atas silangkan klik button daftar pelatihan
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto alert-danger text-danger fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">1</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/form.png') }}" alt="3" class="w-50 mx-auto mb-3">
                        <p class="fs-5 fw-bold text-center">ISI FORM</p>
                        <p class="card-text">
                            Pengisian form harus sesuai dengan informasi terkait data diri kamu pribadi
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto alert-danger text-danger fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">2</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/buyer.png') }}" alt="4" class="w-50 mx-auto mb-3">
                        <p class="fs-5 fw-bold text-center">BAYAR</p>
                        <p class="card-text">
                            Pada pengisian form kamu harus upload bukti pembayaran yang harus diselesaikan
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto alert-danger text-danger fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">3</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/hub.png') }}" alt="6" class="w-50 mx-auto mb-3">
                        <p class="fs-5 fw-bold text-center">KONFIRMASI</p>
                        <p class="card-text">
                            Pihak kami akan mengkonfirmasi pendaftaranmu dan menjelaskan prosedur pelatihan yang kamu pilih
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto alert-danger text-danger fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">4</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/studen.png') }}" alt="7" class="w-50 mx-auto mb-3">
                        <p class="fs-5 fw-bold text-center">SELESAI</p>
                        <p class="card-text">
                            Selamat kamu sudah berhasil daftar dan menjadi bagian dari kami
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto alert-danger text-danger fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">5</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex d-md-none justify-content-center justify-content-md-end ms-auto">
            <button class="customPrevBtn btn btn-outline-danger p-2 me-2" type="button">
                <i class="fas fa-angle-left fa-lg fa-fw"></i>
            </button>
            <button class="customNextBtn btn btn-outline-danger p-2" type="button">
                <i class="fas fa-angle-right fa-lg fa-fw"></i>
            </button>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    margin:24,
    loop:false,
    autoWidth:true,
    items:4
    })
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPrevBtn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
</script>
@endsection