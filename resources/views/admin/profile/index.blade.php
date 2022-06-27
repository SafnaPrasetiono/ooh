@extends('admin.layouts.panel')

@section('head')
<title>Kopitu Denpasar - Profile admin kopitu</title>
@endsection

@section('pages')
<div class="mb-3">
    @livewire('admin.profile.data')
</div>
<div class="mb-3">
    @livewire('admin.profile.password')
</div>
@endsection

@section('script')

@endsection