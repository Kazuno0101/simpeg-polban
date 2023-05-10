@extends('layouts/contentNavbarLayout')

@section('title', 'Pemberhentian')

@section('content')
<h4 class="pt-3 fw-bold">
  <span class="text-muted fw-light">Pemberhentian</span>
</h4>

<div class="mb-3">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
    Tambah Pengajuan Pemberhentian
  </button>

  <!-- Modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Pemberhentian</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
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
          <button type="button" class="btn btn-primary">Tambah pengajuan</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <h5 class="card-header">Pemberhentian</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Dosen</th>
          <th>Tanggal Pengajuan</th>
          <th>Alasan</th>
          <th>Status</th>
          <th>Tanggal Validasi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($pengajuan as $item)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->dosen->nama }}</strong></td>
            <td>{{ $item->tanggal_pengajuan }}</td>
            <td>{{ $item->alasan }}</td>
            <td>
              @switch($item->status)
                  @case('ditolak')
                      <span class="badge bg-label-danger me-1">{{ $item->status }}</span>
                      @break
                  @case('disetujui')
                      <span class="badge bg-label-success me-1">{{ $item->status }}</span>
                      @break
                  @case('diverifikasi')
                      <span class="badge bg-label-primary me-1">{{ $item->status }}</span>
                      @break
                  @case('pending')
                      <span class="badge bg-label-warning me-1">{{ $item->status }}</span>
                      @break
              @endswitch
            </td>
            <td>{{ $item->tanggal_validasi }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection