<?php $__env->startSection('content'); ?>
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
    <?php if(auth()->user()->is_admin): ?>
        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-success mb-3">Tambah</a>
    <?php endif; ?>

    <!-- Default box -->
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="card-title">Data Mahasiswa</h3>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('mahasiswa.exportExcel')); ?>" class="btn btn-info"><i class="far fa-file-excel"></i> Export Excel</a>
            <a href="<?php echo e(route('mahasiswa.exportPDF')); ?>" class="btn btn-warning"><i class="far fa-file-pdf"></i> Export PDF</a>
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
                        <?php if(auth()->user()->is_admin): ?>
                        <th>Action</th>
                        <?php endif; ?>
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
                            <?php if(auth()->user()->is_admin): ?>
                            <td>
                                <a href="<?php echo e(route('mahasiswa.edit', $row->id)); ?>" class="btn btn-primary btn-xs">Edit</a>
                                <a href="<?php echo e(route('mahasiswa.destroy', $row->id)); ?>" class="btn btn-danger btn-xs" data-confirm-delete="true">Delete</a>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>