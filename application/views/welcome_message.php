<?php 

if ($this->session->userdata('status') === TRUE) {
	redirect('admin/dashboard');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple Login CI + Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
	
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center py-5">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header text-center bg-primary text-white">Halaman Login</div>
					<div class="card-body">
						<?php  if ($this->session->flashdata('pesan') !== null): // Jika Flashdata Pesan ada ?> 
							<div class="alert alert-danger"><?= $this->session->flashdata('pesan') ?></div>
						<?php endif; ?>

						<form action="<?= base_url('proseslogin') ?>" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class='form-control' name='username' placeholder='Username Anda'>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class='form-control' name='password' placeholder='Password Anda'>
							</div>
							<button class='btn btn-success btn-block'>Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>