<div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-danger text-white">
            <div class="modal-header ">
                <h5 class="modal-title text-white" id="exampleModalLabel1">Peringatan!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('dosen.destroy', $item->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body text-white">
                    Apakah anda yakin ingin menghapus data <strong>{{$item->nidn.' '.$item->nama}}</strong>?
                </div>
                <div class="modal-footer text-white">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Iya</button>
                </div>
            </form>
        </div>
    </div>
</div>