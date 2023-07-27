<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= asset('./admin-lte/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= asset('./admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset('./admin-lte/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@include('sweetalert::alert')
  <div class="card card-primary">
    <div class="card-header">Register </div>
    <div class="card-body login-card-body">
        <form action="{{ route('register.post') }}" method="post" class="mb-3">
            @csrf
            <div class="input-group mb-3">
                <input type="name" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" name="login" class="btn btn-primary btn-block">Register</button>
                    <br/>
                    <span class="py-2">Already have account? <a href="/">login here</a></span>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= asset('./admin-lte/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= asset('./admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= asset('./admin-lte/js/adminlte.min.js') ?>"></script>
</body>
</html>
