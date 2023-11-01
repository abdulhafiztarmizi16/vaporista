<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<a href="<?= base_url('/')?>"><h2 class="heading-section">Back to Home</h2></a>
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
								<h3 class="mb-4">Sign In</h3>
							</div>
							<!-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> -->
						</div>
						<?= $this->session->flashdata('message'); ?>
						<form method="post" action="<?= base_url('auth'); ?>" class="signin-form">
							<div class="form-group mb-3">
								<label class="label" for="name">Email</label>
								<input type="text" class="form-control form-control-form-login" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Masukkan Alamat Email...">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group mb-3">
								<label class="label" for="password">Password</label>
								<input type="password" class="form-control form-control-form-login" value="<?= set_value('nama'); ?>" name="password" id="password" placeholder="Password">
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50 text-left">
									<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<!-- <div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div> -->
							</div>
						</form>
						<p class="text-center">Not a member? <a href="<?= base_url('auth/registrasi'); ?>">Sign Up</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>