@extends('admin.layouts.panel')

@section('head')
    <title>Wellcome admin OOH Work And Holiday</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="d-block rounded-3 bg-white shadow-sm p-3 mb-3">
                <p class="fs-4 fw-bold mb-0">Wellcome Admin</p>
                <p class="mb-0">Hallo, {{ auth('admin')->user()->username }}</p>
        </div>
    </div>
@endsection

@section('script')
    
@endsection