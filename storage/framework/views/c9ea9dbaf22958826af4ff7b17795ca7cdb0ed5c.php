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

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><?php echo e(isset($mahasiswa) ? 'Edit' : 'Form'); ?> Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="<?php echo e(isset($mahasiswa) ? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if(isset($mahasiswa)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" placeholder="Enter NIM" value="<?php echo e(old('nim') ?? $mahasiswa->nim ?? ''); ?>">
                    <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo $__env->make('partials.error-message', ['field' => 'nim'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="nama">Full Name</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter full name" value="<?php echo e(old('nama') ?? $mahasiswa->nama ?? ''); ?>">
                    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo $__env->make('partials.error-message', ['field' => 'nama'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="fakultas">Faculty</label>
                    <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Enter faculty" value="<?php echo e(old('fakultas') ?? $mahasiswa->fakultas ?? ''); ?>">
                    <?php $__errorArgs = ['fakultas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo $__env->make('partials.error-message', ['field' => 'fakultas'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="prodi">Study Program</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Enter study program" value="<?php echo e(old('prodi') ?? $mahasiswa->prodi ?? ''); ?>">
                    <?php $__errorArgs = ['prodi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo $__env->make('partials.error-message', ['field' => 'prodi'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="no_telpon">Phone</label>
                    <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Enter phone number" value="<?php echo e(old('no_telpon') ?? $mahasiswa->no_telpon ?? ''); ?>">
                    <?php $__errorArgs = ['no_telpon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo $__env->make('partials.error-message', ['field' => 'no_telpon'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="<?php echo e(old('email') ?? $mahasiswa->email ?? ''); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo $__env->make('partials.error-message', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="dosen_wali">Supervisor Lecturer</label>
                    <input type="text" name="dosen_wali" id="dosen_wali" class="form-control" placeholder="Enter supervisor lecturer" value="<?php echo e(old('dosen_wali') ?? $mahasiswa->dosen_wali ?? ''); ?>">
                    <?php $__errorArgs = ['dosen_wali'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo $__env->make('partials.error-message', ['field' => 'dosen_wali'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="btn btn-primary"><?php echo e(isset($mahasiswa) ? 'Update' : 'Submit'); ?></button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\mahasiswa\resources\views/mahasiswa/form.blade.php ENDPATH**/ ?>