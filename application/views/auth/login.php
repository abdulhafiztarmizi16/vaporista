<div class="container">
	<?= $this->session->flashdata('message'); ?>
	<form class="form-login" method="post" action="<?= base_url('auth'); ?>">
		<h2 class="form-login-heading">Login VAPORISTA</h2>
		<div class="form-group" style="margin:40px 10px 15px 10px;">
			<input type="text" class="form-control form-control-form-login" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Masukkan Alamat Email...">
			<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>
		<div class="form-group" style="margin:0 10px 30px 10px;">
			<input type="password" class="form-control form-control-form-login" value="<?= set_value('nama'); ?>" name="password" id="password" placeholder="Password">
			<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
			<div style="margin-top:10px;">
				<input type="checkbox" value="remember-me"> Remember me
				<!-- <span class="pull-right">
					<a data-toggle="modal" href=""> Forgot Password?</a>
				</span> -->
			</div>

			<!-- <label class="checkbox">
				
			</label> -->
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-theme btn-primary btn-form-login" style="width: 95%;" class="fa fa-lock">
				Login
			</button>
		</div>

		<hr>
		<div class="text-center">
			<div class="registration">
				Don't have an account yet?<br />
				<a class="" href="<?= base_url(); ?>auth/registrasi">
					Create an account
				</a>
			</div>
		</div>
		<hr>
		<!-- <p class="footer-text text-center">copyright © 2021 Bootstrapdash.</p> -->
		<!-- <p class="footer-text text-center text-center"><a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"> Free Bootstrap template </a> from BootstrapDash templates</p> -->
	</form>
</div>
