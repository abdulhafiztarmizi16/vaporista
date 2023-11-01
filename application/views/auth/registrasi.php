<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<!-- <h2 class="heading-section">Login #04</h2> -->
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-10">
				<div class="wrap d-md-flex">
				<div class="img" style="background-image: url(<?= base_url('assets/template/') ?>assets/images/background-2.jpg);">
					</div>
					<div class="login-wrap p-4 p-md-5">
						<div class="d-flex">
							<div class="w-100">
								<h3 class="mb-4">Sign Up</h3>
							</div>
						</div>
						<form method="POST" action="<?= base_url('auth/registrasi'); ?>" class="signin-form">
							<div class="form-group mb-3">
								<label class="label" for="name">Nama Lengkap</label>
								<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-form-login" id="nama" placeholder="Nama Lengkap">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group mb-3">
								<label class="label" for="name">Email</label>
								<input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-form-login" id="email" name="email" placeholder="Alamat Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">Password</label>
								<input type="password" class="form-control form-control-form-login" id="password1" name="password1" placeholder="Password">
								<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group mb-3">
								<input type="password" class="form-control form-control-form-login" id="password2" name="password2" placeholder="Ulangi Password">
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
							</div>
						</form>
						<p class="text-center">Have an account? <a href="<?= base_url('auth'); ?>">Sign in</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>