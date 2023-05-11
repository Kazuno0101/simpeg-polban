@extends('layouts/contentNavbarLayout')

@section('title', 'Pensiun')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses!</strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <li>
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </li>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h4 class="pt-3 fw-bold">
  <span class="text-muted fw-light">Pensiun</span>
</h4>

<div class="mb-3">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
    Tambah Pengajuan Pensiun
  </button>

  <!-- Modal -->
  @include('content.simpeg.pensiun.modalCreate')
</div>

<div class="card">
  <h5 class="card-header">Pensiun</h5>
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
              <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                  data-bs-target="#editModal{{ $item->id }}">Edit</button>
              @include('content.simpeg.pensiun.modalEdit')
              <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                  data-bs-target="#deleteModal{{ $item->id }}">Hapus</button>
              @include('content.simpeg.pensiun.modalHapus')
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection