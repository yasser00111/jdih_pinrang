<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Login admin</title>
  </head>
  <body class="container">
	  <div class="row">
		  <div class="col-md-4">

		  </div>
		  <div class="col-md-4">
		  <body class="hold-transition login-page">
			<div class="login-box">
		
		<br><br>
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Forgot Password?</p>
				<?= $this->session->flashdata('message'); ?>
				
				<form action="<?= base_url('Login/forgotPassword') ?>" method="post">
				<?= form_error('email', '<small class="text-danger pl-3>','</small>'); ?>
				
                <input type="text" name="email" value="<?php echo set_value("email"); ?>" placeholder="Email..." class="form-control <?php echo form_error("username") ? 'is-invalid':''; ?>" id="username">
                
				<br>
				<div class="row">
					<div class="col-8">
					
					</div>
					
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block">Reset Password</button>
					</div>
				</div>
			</form>
			
			<hr>
			<p class="mb-1">
				<a href="<?= base_url('login') ?>">Back to Login
			</p>
		</div>
		</div>
		</div>
		  </div>
		  <div class="col-md-4">
			  
		  </div>
	  </div>
	
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>