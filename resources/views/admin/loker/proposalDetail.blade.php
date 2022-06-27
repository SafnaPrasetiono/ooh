@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - lowongan kerja</title>
<style>
    .ck-editor__editable {
        min-height: 200px;
        box-shadow: unset !important;
        border-radius: 0px 0px 4px 4px !important;
    }
</style>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block bg-white rounded shadow p-3 mb-3">
        <div class="row">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3">
                <img src="{{ url('/images/loker/'.$loker->images) }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-7 col-md-8 col-lg-9">
                <div class="p-3 p-sm-0">
                    <p class="fs-5 fw-bold mb-2">{{ $loker->title }}</p>
                    <p class="mb-0 text-secondary">{{ date('d F Y', strtotime($loker->date_start)) }} - {{ date('d F Y',
                        strtotime($loker->date_end)) }}</p>
                    <p class="text-secondary mb-0">{{ $loker->locations }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-block bg-white rounded shadow mb-3">
        <div class="d-block p-3 border-bottom">
            <p class="mb-0 fw-bold">Detail Pelamar pekerjaan</p>
        </div>
        <div class="d-flex align-items-center p-3">
            @if ($user->avatar == 'sample-avatar.png')
            <img src="{{ url('/images/avatar/' . $user->avatar ) }}" class="rounded-circle" width="58px" height="58px">
            @else
            <img src="{{ url('/images/avatar/user/' . $user->avatar ) }}" class="rounded-circle" width="58px"
                height="58px">
            @endif
            <div class="ms-3">
                <p class="fw-bold mb-0">{{ $user->username }}</p>
                <p class="mb-0">{{ $user->email }}</p>
            </div>
            <a href="{{ route('index.user.public', ['key' => $userPublic->key]) }}" class="btn text-primary ms-auto">
                <i class="fas fa-globe fa-lg fa-fw"></i>
            </a>
        </div>
    </div>

    <div class="d-block bg-white rounded shadow mb-3">
        <div class="d-block p-3 border-bottom">
            <p class="mb-0 fw-bold">Kirimkan Aksi</p>
        </div>
        <div class="p-3">
            <form method="POST" action="{{ route('admin.loker.pelamar.action', ['id' => $data->id_proposal]) }}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="process" @if($data->status == 'process') selected @endif>process</option>
                        <option value="review" @if($data->status == 'review') selected @endif>review</option>
                        <option value="interview" @if($data->status == 'interview') selected @endif>Interview</option>
                        <option value="accepted" @if($data->status == 'accepted') selected @endif>accepted</option>
                        <option value="rejected" @if($data->status == 'rejected') selected @endif>rejected</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="editor" class="form-label">Beritahu User</label>
                    <textarea name="content" id="editors" rows="5"
                        class="form-control">@if($data->content != null) {{ $data->content }} @endif</textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-5">Send<i class="fas fa-arrow-alt-right ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ url('/dist/ckeditor5/ckeditor.js') }}"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editors"))
            .then((newEditor) => {
                editor = newEditor;
            })
            .catch((error) => {
                console.error(error);
            });
    </script>
@endsection