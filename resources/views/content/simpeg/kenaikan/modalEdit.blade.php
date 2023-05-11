<div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Kenaikan Jabatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('kenaikan.update', $item->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col">
                        <label for="dosen" class="form-label">Dosen</label>
                        <select class="form-select" id="dosen" required name="dosen_id">
                            <option disabled selected>===== Pilih Dosen =====</option>
                            @foreach ($dosen as $dosens)
                                <option value="{{ $dosens->id }}" {{ $dosens->id == $item->dosen_id ? 'selected' : '' }}>
                                    {{ $dosens->nama }} - {{ $dosens->unitKerja->nama }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="mb-0 col">
                        <label for="jabatan_asal" class="form-label">Jabatan Asal</label>
                        <select class="form-select" id="jabatan_asal" required name="jabatan_asal_id">
                            <option disabled selected>===== Pilih Jabatan Asal =====</option>
                            @foreach ($jabatan as $jabatans)
                                <option value="{{ $jabatans->id }}" {{ $jabatans->id == $item->jabatan_asal_id ? 'selected' : '' }}>
                                    {{ $jabatans->nama }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="mb-0 col">
                        <label for="jabatan_tujuan" class="form-label">Jabatan Tujuan</label>
                        <select class="form-select" id="jabatan_tujuan" required name="jabatan_tujuan_id">
                            <option disabled selected>===== Pilih Jabatan Tujuan =====</option>
                            @foreach ($jabatan as $jabatans)
                                <option value="{{ $jabatans->id }}" {{ $jabatans->id == $item->jabatan_tujuan_id ? 'selected' : '' }}>
                                    {{ $jabatans->nama }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <label for="alasan" class="form-label" >Alasan</label>
                        <textarea class="form-control" id="alasan" rows="3" required name="alasan">{{ $item->alasan }}</textarea>
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