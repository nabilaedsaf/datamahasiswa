@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Mahasiswa</h1>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    @if (auth()->user()->is_admin)
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success mb-3">Tambah</a>
    @endif

    <!-- Default box -->
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title">Data Mahasiswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('mahasiswa.exportExcel')}}" class="btn btn-info"><i class="far fa-file-excel"></i> Export Excel</a>
            <a href="{{ route('mahasiswa.exportPDF')}}" class="btn btn-warning"><i class="far fa-file-pdf"></i> Export PDF</a>
            <hr/>
            <table class="table table-striped table-bordered " id="list-data">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Fakultas</th>
                        <th>Prodi</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th>Dosen Wali</th>
                        @if (auth()->user()->is_admin)
                        <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nim }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->no_telpon }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->dosen_wali }}</td>
                            @if (auth()->user()->is_admin)
                            <td>
                                <a href="{{ route('mahasiswa.edit', $row->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                <a href="{{ route('mahasiswa.destroy', $row->id) }}" class="btn btn-danger btn-xs" data-confirm-delete="true">Delete</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
