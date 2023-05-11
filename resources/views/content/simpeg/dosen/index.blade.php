@extends('layouts/contentNavbarLayout')

@section('title', 'Kelola Dosen')

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
        <span class="text-muted fw-light">Kelola Dosen</span>
    </h4>

    <div class="mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Tambah Dosen
        </button>

        <!-- Modal -->
        @include('content.simpeg.dosen.modalCreate')
    </div>

    <div class="card">
        <h5 class="card-header">Data Dosen</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NIDN</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Unit Kerja</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($dosen as $item)
                        <tr>
                            <td>{{ $item->nidn }}</td>
                            <td>{{ $item->nip ? $item->nip : '-' }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->unitKerja->nama }}</td>
                            <td>{{ ($item->jabatanFungsional ? $item->jabatanFungsional->nama : '') . ';' . ($item->jabatanStruktural ? $item->jabatanStruktural->nama : '') }}
                            </td>
                            <td>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $item->id }}">Edit</button>
                                @include('content.simpeg.dosen.modalEdit')
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $item->id }}">Hapus</button>
                                @include('content.simpeg.dosen.modalHapus')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
