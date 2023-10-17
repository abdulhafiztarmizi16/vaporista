<div class="container">
	<form class="form-login" method="POST" action="<?= base_url('auth/registrasi'); ?>">
		<h2 class="form-login-heading">Register AF4BAKERY</h2>
		<br>
		<div class="form-group" style="margin: 10px;">
			<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-form-login" id="nama" placeholder="Nama Lengkap">
			<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>
		<div class="form-group" style="margin: 10px;">
			<input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-form-login" id="email" name="email" placeholder="Alamat Email">
			<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>
		<div class="form-group" style="margin: 10px;">
			<input type="password" class="form-control form-control-form-login" id="password1" name="password1" placeholder="Password">
			<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>
		<div class="form-group" style="margin: 10px;">
			<input type="password" class="form-control form-control-form-login" id="password2" name="password2" placeholder="Ulangi Password">
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-theme btn-primary btn-form-login" style="width: 95%;">
				Daftar Akun
			</button>
		</div>

		<hr>
		<div class="text-center">
			<a class="small" href="<?= base_url(); ?>auth">Sudah Punya akun? Login!</a>
		</div>
		<hr>
		<!-- <p class="footer-text text-center">copyright © 2023 TeamIT</p>
		<p class="footer-text text-center text-center"><a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"> Free Bootstrap template </a> from BootstrapDash templates</p> -->
	</form>
</div>
