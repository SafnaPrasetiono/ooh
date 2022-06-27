<div>
    <div class="d-flex align-items-center py-3">
        <button wire:click='show' class="btn btn-custom-1 btn-sm px-3">Tambah</button>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th>No</th>
                    <th>Iamges</th>
                    <th>Username</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $item)
                <tr>
                    <th>{{ $index + 1 }}</th>
                    <td><img src="{{ url('/images/testimonial/'. $item->images) }}" alt="" width="64px" class="rounded">
                    </td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->description }}</td>
                    {{-- <td>{{ date('d F Y', strtotime($item->created_at)) }}</td> --}}
                    <td class="text-nowrap">
                        <button wire:click='edit({{ $item->id_testimonials }})' type="button" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-pencil fa-sm fa-fw"></i>
                        </button>
                        <button wire:click='removed({{ $item->id_testimonials }})' type="button" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div wire:ignore.self class="modal fade" id="Modals" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="d-block">
                            @if ($images)
                            @if ($edit == true)
                            <img src="{{ url('/images/testimonial/' . $images) }}" class="img-fluid rounded mb-2">
                            @else
                            <img src="{{ $images->temporaryUrl() }}" class="img-fluid rounded mb-2">
                            @endif
                            @endif
                            <div class="justify-content-center" wire:loading.flex wire:target='images'>
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <label for="banner-phone" class="form-label">Images</label>
                        <input wire:model='images' type="file" name="banner-sm"
                            class="form-control @error('images') is-invalid @enderror" id="banner-phone">
                        @error('images')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input wire:model='username' type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username">
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea wire:model='description' name="description" id="description" rows="4"
                            class="form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    @if ($edit == true)
                    <button wire:click='update' type="button" class="btn btn-warning" wire:loading.attr="disabled"
                        wire:target='update'>
                        <span wire:loading.block wire:target='update'>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span>Loading...</span>
                        </span>
                        <span wire:loading.remove wire:target='update'>Simpan Perubahan</span>
                    </button>
                    @else
                    <button wire:click='store' type="button" class="btn btn-primary" wire:loading.attr="disabled"
                        wire:target='store'>
                        <span wire:loading.block wire:target='store'>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span>Loading...</span>
                        </span>
                        <span wire:loading.remove wire:target='store'>Simpan Data</span>
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
		document.addEventListener('deleteConfrimed', function() {
        Swal.fire({
                title: "Apa anda yakin?",
                text: "Menghapus data banner ini!!!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Yes, delete!',
                cancelButtonText: 'Tidak',
            })
            .then((next) => {
                if (next.isConfirmed) {
                    Livewire.emit('deleteAction');
                }
            });
        })

		window.addEventListener('showModals', () => {
			$('#Modals').modal('show');
		});
		window.addEventListener('expandModals', () => {
			$('#Modals').modal('hide');
		});

        window.addEventListener('success', event => {
            Swal.fire({
                icon: 'success',
                title: 'Good Jobs!',
                text: event.detail,
            })
        })
        window.addEventListener('erros', event => {
            Swal.fire({
                icon: 'error',
                title: 'Opps...!',
                text: event.detail,
            })
        })
    });
    </script>
</div>