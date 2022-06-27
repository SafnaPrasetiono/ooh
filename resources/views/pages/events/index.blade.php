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
    .ratio-3x4{
        --bs-aspect-ratio: calc(4 / 3 * 100%);
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 70px"></div>
<div class="p-5 bg-danger">
    <div class="container">
        <h2 class="fw-bold text-white">EVENT OOH KUPU KUPU GLOBAL</h2>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('index') }}"
                    class="link-light text-decoration-none">beranda</a></li>
            <li class="breadcrumb-item text-white" aria-current="page">Events</li>
        </ol>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                @livewire('pages.events.data')
            </div>
            <div class="col-12 col-lg-3">

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection