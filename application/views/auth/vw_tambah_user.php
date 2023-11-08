<!-- Begin Page Content -->
<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row justify-content-center">
				<div class="col-md-8 ">
						<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i> Form Tambah User</h4>
                        <form method="POST" action="" class="signin-form">
							<div class="form-group mb-3">
								<label for="name">Nama Lengkap</label>
								<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-form-login" id="nama" placeholder="Nama Lengkap">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group mb-3">
								<label for="name">Email</label>
								<input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-form-login" id="email" name="email" placeholder="Alamat Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group mb-3">
								<label for="password">Password</label>
								<input type="password" class="form-control form-control-form-login" id="password1" name="password1" placeholder="Password">
								<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group mb-3">
								<input type="password" class="form-control form-control-form-login" id="password2" name="password2" placeholder="Ulangi Password">
							</div>
                            <label for="role">Role User</label>
                            <select name="role" id="role" class="form-control">
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                                <option value="Superadmin">Superadmin</option>
                            </select>
                            <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
							<div class="form-group mt-3">
                                <a href="<?= base_url('settings/') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah User</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</section>

<script>
    // Mencari semua elemen input dengan atribut autocomplete
    var inputElements = document.querySelectorAll('input[autocomplete]');

    // Menghapus nilai-nilai input
    inputElements.forEach(function(inputElement) {
        inputElement.value = '';
    });
</script>

