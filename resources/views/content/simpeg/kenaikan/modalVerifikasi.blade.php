<div class="modal fade" id="VerifikasiModal{{$item->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="text-dark modal-content bg-waring">
            <div class="modal-header ">
                <h5 class="text-dark modal-title" id="exampleModalLabel1">Peringatan!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="text-dark modal-body">
                    Apakah anda yakin ingin memverifikasi data <strong>{{$item->dosen->nama}}</strong>?
                </div>
                <div class="text-dark modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <form method="POST" action="{{ route('kenaikan.verifikasi', $item->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value='ditolak'>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </form>
                <form method="POST" action="{{ route('kenaikan.verifikasi', $item->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value='diverifikasi'>
                    <button type="submit" class="btn btn-success">Verifikasi</button>
                </form>
            </div>
        </div>
    </div>
</div>