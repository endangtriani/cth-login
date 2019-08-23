<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" >

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/sb-admin.css');?>" >
  </head>
  <body>
    <?php
                if ($this->session->flashdata('alert') == 'login_gagal'):
                  ?>
                  <div class="alert alert-danger alert-dismissible animated fadeInDown round" style="" id="feedback"
                     role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Username atau password salah
                  </div>
                <?php
                elseif ($this->session->flashdata('alert') == 'belum_login'):
                  ?>
                  <div class="alert alert-warning alert-dismissible animated fadeInDown round" style="" id="feedback"
                     role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Silahkan Login terlebih dahulu
                  </div>
                <?php
                endif;
                ?>
        <?= form_open('login/aksi_login') ?>
        <div class="form-group">
            <label for="inputusername">Username</label>
            <input type="text" class="form-control" name="username" value="" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="inputpassword">Password</label>
            <input type="password" class="form-control" name="password" value="" placeholder="Password">
        </div>

        <button type="submit" name="login" class="btn btn-primary">Login</button>
      <?= form_close() ?>

      <!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
  </body>

</html>
