@extends('layouts.panel')

@section('head')
<title>OOH Kupu Kupu Global - Pelayanan rekomendai kerja {{ $data }}</title>
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
<div class="py-5 bg-danger">
    <div class="container">
        <h2 class="fw-bold text-white">Pekerjaan {{ $data }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-white"><a href="{{ route('index') }}" class="link-light">Beranda</a></li>
            <li class="breadcrumb-item text-white" aria-current="page">{{ $data }}</li>
        </ol>
    </div>
</div>
<div class="py-5">
    <div class="container">
        @if ($data == 'nt-farmer')
        @livewire('pages.service.ntfarmer', ['post' => $data])
        @else
        @livewire('pages.service.hospitality', ['post' => $data])
        @endif
    </div>
</div>
@endsection

@section('script')

@endsection