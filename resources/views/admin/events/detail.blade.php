@extends('admin.layouts.panel')

@section('head')
<title>OOH - Detail acara {{ $data->title }}</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded-3 bg-white shadow-sm p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Detail Acara</p>
        <p class="mb-0">Halaman detail acara {{ $data->title }}</p>
    </div>
    <div class="d-block rounded-3 bg-white shadow-sm p-3 mb-3">
        @livewire('admin.events.register', ['post' => $data->id_events])
    </div>
</div>
@endsection

@section('script')

@endsection