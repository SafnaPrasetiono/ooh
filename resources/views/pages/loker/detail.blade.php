@extends('layouts.panel')

@section('head')
<title>OOH Kupu Kupu Global - Detail lowongan kerja</title>
@endsection

@section('pages')
<div class="d-block bg-danger" style="height: 270px"></div>
<div class="pb-5" style="margin-top: -170px;">
    <div class="container mb-3">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="d-block rounded shadow-sm bg-white p-3">
                    <div class="d-block pb-3 mb-3">
                        <div class="mb-3">
                            <p class="fs-3 fw-bold mb-0 text-orange">{{ $data->title }}</p>
                            <p class="mb-0 text-secondary">Postingan, {{ date('d F Y', strtotime($data->date_start)) }}
                            </p>
                        </div>
                        <div class="d-flex">
                            @auth('user')
                            @livewire('pages.loker.submit', ['post' => $data])
                            @else
                            <a class="btn btn-primary px-4" href="#">Apply Now</a>
                            <a class="btn btn-outline-primary px-4 ms-2" href="#">
                                <i class="fas fa-star fa-sm fa-fw"></i> Simpan
                            </a>
                            @endauth
                        </div>
                    </div>
                    <div class="d-block bg-white">
                        <img src="{{ url('/images/loker/' . $data->images) }}" alt="logo" width="100%"
                            class="rounded mb-3">
                        <div class="mb-5">
                            <?php echo $data->content ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="d-block rounded shadow-sm bg-white p-3 mb-3">
                    <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                        <p class="fs-5 text-secondary text-center">Buat Flayer <br>Kordinasi dengan Anggun</p>
                    </div>
                </div>
                <div class="d-block rounded shadow-sm bg-white p-3 mb-3">
                    <div class="text-secondary">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection