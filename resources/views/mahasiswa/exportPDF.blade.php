<style>
    table {
        border:1px solid #000;
        border-collapse: collapse;
    }

    tr th {
        padding: 7px;
        border:1px solid #000;
    }

    tr td {
        padding: 7px;
        border:1px solid #000;
    }
</style>

<h3>Data Mahasiswa</h3>
<table width="100%">
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
</table>
