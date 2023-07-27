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

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ isset($mahasiswa) ? 'Edit' : 'Form' }} Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="{{ isset($mahasiswa) ? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store') }}" method="POST">
                @csrf
                @if(isset($mahasiswa))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" placeholder="Enter NIM" value="{{ old('nim') ?? $mahasiswa->nim ?? '' }}">
                    @error('nim')
                        @include('partials.error-message', ['field' => 'nim'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Full Name</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter full name" value="{{ old('nama') ?? $mahasiswa->nama ?? '' }}">
                    @error('nama')
                        @include('partials.error-message', ['field' => 'nama'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fakultas">Faculty</label>
                    <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Enter faculty" value="{{ old('fakultas') ?? $mahasiswa->fakultas ?? '' }}">
                    @error('fakultas')
                        @include('partials.error-message', ['field' => 'fakultas'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="prodi">Study Program</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Enter study program" value="{{ old('prodi') ?? $mahasiswa->prodi ?? '' }}">
                    @error('prodi')
                        @include('partials.error-message', ['field' => 'prodi'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_telpon">Phone</label>
                    <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Enter phone number" value="{{ old('no_telpon') ?? $mahasiswa->no_telpon ?? '' }}">
                    @error('no_telpon')
                        @include('partials.error-message', ['field' => 'no_telpon'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="{{ old('email') ?? $mahasiswa->email ?? '' }}">
                    @error('email')
                        @include('partials.error-message', ['field' => 'email'])
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dosen_wali">Supervisor Lecturer</label>
                    <input type="text" name="dosen_wali" id="dosen_wali" class="form-control" placeholder="Enter supervisor lecturer" value="{{ old('dosen_wali') ?? $mahasiswa->dosen_wali ?? '' }}">
                    @error('dosen_wali')
                        @include('partials.error-message', ['field' => 'dosen_wali'])
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($mahasiswa) ? 'Update' : 'Submit' }}</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
