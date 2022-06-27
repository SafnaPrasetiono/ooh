@extends('layouts.panel')

@section('head')
<title>Selamat datang di OOH Work and Holiday</title>
<style>
    .img-banners {
        width: 100%;
        height: 100%;
        background-position: top;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 70px"></div>
@livewire('pages.index.banners')
<div class="py-5 border-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-8 col-lg-6">
                <img src="{{ url('/images/elements/icon-visa.png') }}" alt="visa" class="w-100">
            </div>
            <div class="col-12 col-lg-6">
                <div class="text-center text-lg-start">
                    <h2 class="fw-bold mb-4">JENIS VISA</h2>
                    {{-- <hr class="soft" style="width: 50px"> --}}
                    <p class="mb-4 mb-lg-5 lh-lg">Ada beberapa jenis visa yang bisa kamu pilih mulai dari visa Agriculture, visa work, Visa holiday, Visa Studen, Visa Kerja dan masih banyak lagi. Segera daftarankan diri kamu bersama kami OOH KUPU KUPU GLOBAL.</p>
                    <a href="#" class="btn btn-outline-danger rounded-pill px-4">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container mb-5">
        <div class="text-center">
            <h3 class="fw-bold text-uppercase">Rekomendasi Kerja</h3>
            <p class="mb-0">Temui pekerjaan impianmu bersama OOH KUPU KUPU GLOBAL</p>
        </div>
    </div>
    @livewire('pages.index.loker-farmer')
    @livewire('pages.index.loker-hospitality')
</div>
@livewire('pages.index.testimonial')
<div class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-3">
            <p class="mb-0 text-uppercase">PT OOH KUPU KUPU GLOBAL</p>
        </div>
        <div class="text-center mb-3">
            <h3 class="mb-0 text-uppercase">4 Steps to Start Your Visa</h3>
        </div>
        <div class="d-block py-4">
            <div class="row align-items-stretch">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="d-block text-center rounded-3 bg-white shadow-sm px-3 py-5 h-100">
                        <img src="{{ url('/images/icons/frist.png') }}" alt="" class="w-50 mb-4">
                        <p class="mb-0">
                            Konsultasi, Pendaftran, dan Melengkapi Dokumen (OOH BALI)
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="d-block text-center rounded-3 bg-white shadow-sm px-3 py-5 h-100">
                        <img src="{{ url('/images/icons/interview.png') }}" alt="" class="w-50 mb-4">
                        <p class="mb-0">
                            Wawancara Untuk Mendapatkan Surat Rekomendasi kerja dari perusahaan dan kontrak kerja
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="d-block text-center rounded-3 bg-white shadow-sm px-3 py-5 h-100">
                        <img src="{{ url('/images/icons/apply.png') }}" alt="" class="w-50 mb-4">
                        <p class="mb-0">
                            Apply Australia Visa. (Agriculture, WHV, Study or etc.)
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="d-block text-center rounded-3 bg-white shadow-sm px-3 py-5 h-100">
                        <img src="{{ url('/images/icons/finish.png') }}" alt="" class="w-50 mb-4">
                        <p class="mb-0">
                            Bekerja & Resmi di Australia hingga 3 tahun atau sesuai kontrak kerja/job letter (JOB)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5 alert-secondary">
    <div class="container">
        <div class="px-lg-5">
            <div class="text-center">
                <p>PT. OOH KUPU KUPU GLOBAL</p>
                <h3>GABUNG SEGERA DENGAN KAMI</h3>
                <p class=" mb-4">bergabunglah bersama kami dan dapatakan visa serta pekerjaan yang kamu inginkan</p>
                <a href="#" class="btn btn-outline-danger rounded-pill px-5 btn-lg">Daftar</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection