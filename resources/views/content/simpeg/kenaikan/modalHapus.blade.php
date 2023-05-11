<div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="text-white modal-content bg-danger">
            <div class="modal-header ">
                <h5 class="text-white modal-title" id="exampleModalLabel1">Peringatan!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('kenaikan.destroy', $item->id) }}">
                @csrf
                @method('DELETE')
                <div class="text-white modal-body">
                    Apakah anda yakin ingin menghapus data <strong>{{$item->dosen->nama}}</strong>?
                </div>
                <div class="text-white modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Iya</button>
                </div>
            </form>
        </div>
    </div>
</div>