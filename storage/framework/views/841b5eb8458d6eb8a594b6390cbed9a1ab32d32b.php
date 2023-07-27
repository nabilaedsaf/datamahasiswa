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
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($row->nim); ?></td>
                <td><?php echo e($row->nama); ?></td>
                <td><?php echo e($row->fakultas); ?></td>
                <td><?php echo e($row->prodi); ?></td>
                <td><?php echo e($row->no_telpon); ?></td>
                <td><?php echo e($row->email); ?></td>
                <td><?php echo e($row->dosen_wali); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\Users\LENOVO\mahasiswa\resources\views/mahasiswa/exportPDF.blade.php ENDPATH**/ ?>