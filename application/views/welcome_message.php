<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
</head>
<body style="background : grey">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<br><br><br><br><br><br><br><br>
		<div class="panel panel-default">
			<div class="panel-heading" >Login Menu</div>
			<p style="color: red"><?php echo $this->session->flashdata('gagal') ?></p>
			<div class="panel-body">
				<form  action="<?php echo base_url('Menumin/login') ?>" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<input type="submit" name="login" value="LOGIN" class="btn btn-info">
				</form>
			</div>
		</div>
	</div>
</body>
</html>