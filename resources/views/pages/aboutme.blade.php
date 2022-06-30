@extends('layouts.panel')

@section('head')
<title>OOH - Tentang OOH Kupu Kupu Global</title>
<style>
    .elements-skew {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        transform: skewY(-2deg);
        background-color: #e0e0e0;
    }

    .elements-active-2 {
        position: relative;
        padding-top: 1rem;
        padding-bottom: 2rem;
        background-color: #ececec;
        margin-top: 6%;
    }

    .elements-main {
        display: block;
        position: relative;
        z-index: 9;
    }

    .my-career {
        width: 400px;
    }

    .customPrevBtn {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%) !important;
    }

    .customNextBtn {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%) !important;
    }

    .element-secondary {
        background: #cfe2ff;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #cfe2ff, #49deff);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #cfe2ff, #49deff);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .el-end {
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
    }

    @media(max-width: 576px) {
        .my-career {
            width: 100%;
        }
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 70px;"></div>
<div class="py-5">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-4">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="text-center text-lg-start">
                    <h3>Tentang Kami</h3>
                    <hr class="soft mx-auto mx-lg-0" style="width: 24%">
                    <p class="fs-5">PT OOH KUPU-KUPU GLOBAL adalah perusahaan yang bergerak di bidang agent perjalanan
                        (tour and travel) yang berdiri sejak tahun 2009 dengan nomor izin AHU-AHA.01.03.0989609. Dan
                        saat ini berfokus dalam bidang pelayanan one step service pengurusan visa, pelatihan dan bekerja
                        ke Australia.</p>
                </div>
            </div>
            <div class="col-7 col-lg-4 mx-auto order-1 order-lg-2">
                <img src="{{ url('/images/logo/oohlogo.png') }}" alt="top-banners" class="w-100 mb-5">
            </div>
        </div>
    </div>
</div>

<div class="pb-5 pt-4">
    <div class="container mb-5 pb-4">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="ratio ratio-16x9 mb-4">
                    <iframe class="" src="https://www.youtube.com/embed/vB1AMNVjGbU" title="VID promosi OOH"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <p class="mb-0 fs-5">
                    PT OOH KUPU-KUPU GLOBAL telah memiliki perusahaan yang berdomisili di Australia yaitu Ooh Butrerfly
                    Pty Ltd yang merupakan manifestasi dari keseriusan layanan perusahaan yang professional untuk
                    bertujuan memperluas jaringan dan menjadi pusat informasi tentang Australia dan dapat memberikan
                    solusi untuk tinggal lebih lama di Australia.
                </p>
            </div>
        </div>
        <p class="fs-5">
            PT OOH KUPU-KUPU GLOBAL adalah perusahaan yang telah berpengalaman dalam pengurusan visa dan pemberian
            informasi bekerja di Australia dari tahun 2009 hingga saat ini.
        </p>
        <p class="fs-5">
            PT OOH KUPU-KUPU GLOBAL telah bekerja sama dengan konsultan imigrasi Australia, Lembaga pelatihan,
            pengguna/user di Australia sehingga dapat memberikan layanan yang komplit dan dapat membantu anda mengikuti
            program ke Australia.
        </p>
        <p class="fs-5">
            Saat ini PT OOH KUPU-KUPU GLOBAL berkedudukan di Jakarta dan telah membuka layanan pendaftaran online dan
            dapat diakses melalui website www.ooh.co.id. Segala macam informasi dapat anda cek pada website kami. Kami
            menyediakan banyak layanan jasa untuk anda yang ingin mengikuti program ke Australia seperti (layanan
            pengurusan visa, layanan transport, layanan tempat tinggal, layanan rekomendasi job).
        </p>
    </div>
</div>

<div class="alert-secondary py-5">
    <div class="container py-5">
        <div class="row g-3 gx-4 align-items-center justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="mb-3 mb-lg-5">
                    <p class="fs-1">Visi Kami</p>
                    <p class="fs-5 d-flex">
                        <i class="fas fa-check-circle fa-sm fa-fw mt-2 me-2"></i> Mewujudkan mimpi anda menjadi nyata.
                    </p>
                </div>
                <div class="mb-3">
                    <p class="fs-1">Motto</p>
                    <p class="fs-5 d-flex">
                        <i class="fas fa-check-circle fa-sm fa-fw mt-2 me-2"></i> Berpikir, bertindak, smart dan sukses
                        dengan hati memberi.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <p class="fs-1 mb-1">Misi Kami</p>
                <div class="fs-5">
                    <p class="d-flex align-items-top">
                        <i class="fas fa-check-circle fa-sm fa-fw mt-2 me-2"></i> Melayani sepenuh hati dan
                        professional.
                    </p>
                    <p class="d-flex align-items-top">
                        <i class="fas fa-check-circle fa-sm fa-fw mt-2 me-2"></i> Pasangan sejati anda dalam mencari
                        kerja.
                    </p>
                    <p class="d-flex align-items-top">
                        <i class="fas fa-check-circle fa-sm fa-fw mt-2 me-2"></i> Menjadi perusahaan one step service.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <div class="py-5">
    <div class="container pt-3 pb-5 py-lg-5">
        <div class="d-block text-center mb-5">
            <h3 class="fw-bold text-uppercase">Perjalanan Karir</h3>
            <p class="fs-5">KOPITU mengajak berbagai pihak untuk meningkatkan pemasaran dalam negeri maupun luar negeri.
                Hal ini
                bertujuan untuk mensejahterakan UMKM dan UKM yang termasuk dalam roda utama perputaran ekonomi</p>
        </div>
        <div class="d-block position-relative">
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="card-body text-center px-4">
                                    <img src="{{ url('/images/career/bpjph-2020.jpeg') }}" alt="pbjph"
                                        class="img-fluid">
                                </div>
                                <div class="py-3">
                                    <div class="position-relative w-50 ms-auto mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-0 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2020</p>
                                        <p class="mb-0">Pertemuan dengan BPOM membahas kerja sama untuk pengurusan pbom
                                            umk dan umkm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="card-body text-center px-4">
                                    <img src="{{ url('/images/career/bpom.jpeg') }}" alt="bpom" class="img-fluid">
                                </div>
                                <div class="py-3">
                                    <div class="position-relative mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-50 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2021</p>
                                        <p class="mb-0">Pertemuan dengan BPOM membahas kerja sama untuk pengurusan pbom
                                            umk dan umkm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="card-body text-center px-4">
                                    <img src="{{ url('/images/career/e-store.jpg') }}" alt="bpom" class="img-fluid">
                                </div>
                                <div class="py-3">
                                    <div class="position-relative mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-50 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2022</p>
                                        <p class="mb-0">Pembuatan elektronik store pertama kopitu untuk mempermudah para
                                            umk dan umkm</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item">
                            <div class="my-career card pb-4 border-0 rounded-0">
                                <div class="card-body text-center px-4">
                                    <img src="{{ url('/images/career/lkpp.jpeg') }}" alt="lkpp" class="img-fluid">
                                </div>
                                <div class="py-3">
                                    <div class="position-relative w-50 me-auto mb-4">
                                        <div class="progress" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span
                                            class="bg-primary position-absolute top-0 start-100 translate-middle rounded-pill"
                                            style="width: 1.5rem; height:1.5rem;"></span>
                                    </div>
                                    <div class="text-center px-3">
                                        <p class="fw-bold fs-5 mb-1">2022</p>
                                        <p class="mb-0">Pertemuan dengan LKPP pembahasan mengenai integrasi dengan
                                            kopitu e-store</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="owl-nav">
                    <button class="customPrevBtn btn btn-primary btn-sm p-1 me-2" type="button">
                        <i class="fas fa-angle-left fa-lg fa-fw"></i>
                    </button>
                    <button class="customNextBtn btn btn-primary btn-sm p-1" type="button">
                        <i class="fas fa-angle-right fa-lg fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="py-5 px-0 m-0">
    <div class="container pt-3 pb-5 py-lg-5">
        <div class="row g-3 align-items-stretch">
            <div class="col-12">
                <p class="fs-3 fw-bold">Lokasi Kantor Kami</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1489520874957!2d115.2349925140719!3d-8.677381790742741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240586dbd36eb%3A0xac31629ef06f1f6e!2sJl.%20Tukad%20Yeh%20Aya%20No.116%2C%20Dauh%20Puri%20Klod%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali%2080234!5e0!3m2!1sid!2sid!4v1655793653585!5m2!1sid!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row g-3 align-items-stretch h-100 mt-0">
                    <div class="col-12 mt-0">
                        <div class="d-block h-100 rounded-3 bg-white shadow-sm p-3">
                            <p class="fw-bold mb-1">Indonesia</p>
                            <div class="d-flex mb-0">
                                <i class="fas fa-map-marker-alt fa-sm fa-fw me-1 mt-1"></i>
                                <span>Jl. Tukad Yeh Aya No.116, Renon Denpasar, Bali 80226</span>
                            </div>
                            <div class="d-flex mb-0">
                                <i class="fas fa-map-marker-alt fa-sm fa-fw me-1 mt-1"></i>
                                <span>Jl. Letjen S. Parman No.Kav. 28, RT.3/RW.5, Tj. Duren Sel., Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-block h-100 rounded-3 bg-white shadow-sm p-3">
                            <p class="fw-bold mb-1">Phone</p>
                            <p class="mb-0">+62 813-1173-6178</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-block h-100 rounded-3 bg-white shadow-sm p-3">
                            <p class="fw-bold mb-1">Email</p>
                            <p class="mb-0">info@kopitu.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="el-end py-5" style="background-image: url('/images/elements/bg-2.jpg')">
    <div class="container pt-4 pb-3">
        <div class="d-block p-4 p-lg-5 fs-5 text-center">
            <p class="mb-3 text-warning">Mengapa Anda harus mempercayakan kami dalam pengurusan Visa Kerja dan Liburan
                Australia ?</p>
            <p class="mb-3 text-white">
                Kami telah melayani Visa Kerja dan Liburan Australia sejak 2009, kualitas layanan profesional kami dari
                staf PT. Ooh Kupu- kupu Global yang telah terbukti dan terpercaya. Tidak ada lagi penolakan untuk
                mengajukan Visa Kerja dan Liburan Australia. Anda dapat menghemat waktu, energi, dan uang.
            </p>
            <p class="mb-3 text-white">
                Percayakan langsung kepada kami staf melalui situs web www.ooh.co.id.
            </p>
            <p class="fw-bold fs-5 text-white mb-5">Semua yang Anda butuhkan ada di menu SERVICE.</p>
            <a href="#" class="btn btn-warning rounded-pill px-3">Service</a>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:   false,
        nav: false,
        lazyLoad:false,
        dots: false,
        responsive: {
            0: {
                items: 1,
                autoWidth: false,
            },
            600: {
                autoWidth:  true,
            }
        }
    })
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    $('.customPrevBtn').click(function() {
        owl.trigger('prev.owl.carousel');
    })
</script>
@endsection