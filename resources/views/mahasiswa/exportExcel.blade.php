<table class="table table-striped table-bordered" id="list-data">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>No. Telp</th>
            <th>Email</th>
            <th>Dosen Wali</th>
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
            </tr>
        @endforeach
    </tbody>
