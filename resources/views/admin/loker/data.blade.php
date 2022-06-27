@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - lowongan kerja</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Lowongan Kerja</p>
        <p class="mb-0 text-secondary">Halaman data lowongan pekerjaan</p>
    </div>
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        @livewire('admin.loker.data')
    </div>
    {{-- <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-all" type="button"
                    role="tab">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-farmer" type="button"
                    role="tab">NT Farmer</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-hospitality" type="button"
                    role="tab">Hospitality</button>
            </li>
        </ul>
    </div>
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
                @livewire('admin.loker.data')
            </div>
            <div class="tab-pane fade" id="pills-farmer" role="tabpanel">
                @livewire('admin.loker.data', ['post' => 'NT-FARMER'])
            </div>
            <div class="tab-pane fade" id="pills-hospitality" role="tabpanel">
                @livewire('admin.loker.data', ['post' => 'HOSPITALITY'])
            </div>
        </div>
    </div> --}}
</div>
@endsection

@section('script')

@endsection