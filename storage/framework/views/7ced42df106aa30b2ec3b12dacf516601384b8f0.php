<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Administrasi Mahasiswa</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://source.unsplash.com/50x50/?profile" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>

                <li class="nav-item">
                    <form action="<?php echo e(route('logout')); ?>" method="POST"> <?php echo csrf_field(); ?> <button type="submit" style="background: none;border:none;padding-left:18px;color:#c7c7c7">
                            <i class="nav-icon fas fa-sign-out-alt"></i>Logout </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /Users/arbud/Documents/Freelance Project/mahasiswa/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>