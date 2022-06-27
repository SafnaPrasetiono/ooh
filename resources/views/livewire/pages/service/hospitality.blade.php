<div>
    <div class="d-flex align-items-center">
        <p class="fs-5 fw-bold mb-0">Hospitality</p>
        <div class="ms-auto">
            <input wire:model='search' type="text" class="form-control" placeholder="Cari Pekerjaan...">
        </div>
    </div>
    <hr class="soft">
    <div class="d-block mb-3">
        <div class="row g-3">
            @foreach ($data as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{ url('/images/loker/' . $item->images ) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <a href="{{ route('loker.detail', ['slug' => $item->slug]) }}" class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                            {{ $item->title }}
                        </a>
                        <small class="d-block text-secondary mb-3">Posting, {{ date('d F Y', strtotime($item->date_start)) }} - {{ date('d F Y', strtotime($item->date_end)) }}</small>
                        <p class="card-text text-ellipsis-3">{{$item->description}}</p>
                        <a href="{{ route('loker.detail', ['slug' => $item->slug]) }}" class="btn link-primary px-0">Lihat detail <i class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @if($data->hasPages())
    <div class="d-flex align-items-center">
        <nav class="ms-auto">
            {{ $data->links('layouts.paginations') }}
        </nav>
    </div>
    @endif
</div>
