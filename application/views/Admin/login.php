<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Login admin</title>
  </head>
  <body class="container">

    <div class="container">
    <br>
      <h1 class="text-center">Login Admin</h1>
      <br>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
            <form class="form-group" action="<?php echo base_url('login') ?>" method="post">
            <?= $this->session->flashdata('message'); ?><br>
                <label for="username">Email</label>
                <input type="text" name="email" value="<?php echo set_value("email"); ?>" placeholder="Email..." class="form-control <?php echo form_error("username") ? 'is-invalid':''; ?>" id="username">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo set_value("password"); ?>" placeholder="Password..." class="form-control <?php echo form_error("password") ? 'is-invalid':''; ?>" id="password">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>">
                <br>
                <input type="submit" name="submit" value="Login" class="btn btn-primary">
                <a class="btn btn-primary" href="<?php echo base_url('login/lupa') ?>">Lupa Password</a>
            </form>
            <br>
            <?php if($this->session->flashdata("gagal_login")){ ?>
                <div class="alert alert-warning">
                <?php echo $this->session->flashdata("gagal_login"); ?>
                </div>
            <?php } ?>
            <?php if($this->session->flashdata("sukses_logout")){ ?>
                <div class="alert alert-success">
                <?php echo $this->session->flashdata("sukses_logout") ?>
                </div>
            <?php } ?>
            </div>
            <div class="col-md-4">

            </div>
        </div>
      
      
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>