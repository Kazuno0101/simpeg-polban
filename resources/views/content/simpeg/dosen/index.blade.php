@extends('layouts/contentNavbarLayout')

@section('title', 'Kelola Dosen')

@section('content')
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
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Unit Kerja</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($dosen as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nip ? $item->nip : '-' }}</td>
                            <td>{{ $item->unitKerja->nama }}</td>
                            <td>{{ ($item->jabatanFungsional ? $item->jabatanFungsional->nama : '') . ';' . ($item->jabatanStruktural ? $item->jabatanStruktural->nama : '') }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
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
