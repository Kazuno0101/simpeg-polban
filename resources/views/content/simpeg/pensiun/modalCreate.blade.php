<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Pensiun</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('pensiun.store') }}">
            @csrf
            <div class="modal-body">
            <div class="row">
                <div class="mb-3 col">
                <label for="dosen" class="form-label">Dosen</label>
                <select class="form-select" id="dosen" aria-label="Default select example">
                    <option disabled selected>===== Pilih Dosen =====</option>
                    @foreach ($dosen as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }} - {{ $item->unitKerja->nama }} - {{ $item->unitkerja->nama }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="row g-2">
                <label for="alasan" class="form-label">Alasan</label>
                <textarea class="form-control" id="alasan" rows="3"></textarea>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah pengajuan</button>
            </div>
        </form>
      </div>
    </div>
  </div>