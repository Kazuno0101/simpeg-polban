<div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Data Dosen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('dosen.update', $item->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama">Nama
                            <span class="text-danger">*</span>
                        </label>
                        <input name="nama" type="text" class="form-control" id="nama" required value="{{$item->nama}}">

                    </div>
                    <div class="form-group mb-3">
                        <label for="nidn">NIDN
                            <span class="text-danger">*</span>
                        </label>
                        <input name="nidn" type="text" class="form-control" id="nidn" value="{{$item->nidn}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nip">NIP</label>
                        <input name="nip" type="text" class="form-control" id="nip" value="{{$item->nip}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="unit_kerja">Unit Kerja
                            <span class="text-danger">*</span>
                        </label>
                        <select name="unit_kerja_id" class="form-control" id="unit_kerja" required>
                            <option value="">-- Pilih Unit Kerja --</option>
                            @foreach ($unit_kerja as $unit)
                                <option value="{{ $unit->id }}" {{ $unit->id == $item->unit_kerja_id ? 'selected' : '' }}>
                                    {{ $unit->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jabatan_fungsional">Jabatan Fungsional
                            <span class="text-danger">*</span>
                        </label>
                        <select name="jabatan_fungsional_id" class="form-control" id="jabatan_fungsional" required>
                            <option value="">-- Pilih Jabatan Fungsional --</option>
                            @foreach ($jabatan as $jab)
                                @if ($jab->tipe == 'fungsional')
                                    <option value="{{ $jab->id }}" {{ $jab->id == $item->jabatan_fungsional_id ? 'selected' : '' }}>
                                        {{ $jab->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jabatan_struktural">Jabatan Struktural</label>
                        <select name="jabatan_stukrtural_id" class="form-control" id="jabatan_struktural">
                            <option value="">-- Pilih Jabatan Struktural --</option>
                            @foreach ($jabatan as $jab)
                                @if ($jab->tipe == 'struktural')
                                    <option value="{{ $jab->id }}" {{ $jab->id == $item->jabatan_stukrtural_id ? 'selected' : '' }}>
                                        {{ $jab->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>