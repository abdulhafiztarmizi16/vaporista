<!-- Begin Page Content -->
<section id="main-content">
	<section class="wrapper site-min-height">
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">				
				<div class="form-panel">
				<h4 class="mb"><i class="fa fa-angle-right"></i> Form Tambah Toko</h4>
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input name="nama" value="<?= set_value('nama'); ?>" type="text" class="form-control" id="nama" placeholder="Nama Toko">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>	
						<div class="form-group">
							<label for="tentang">Tentang</label>
							<input name="tentang" type="text" value="<?= set_value('tentang'); ?>" class="form-control" id="tentang" placeholder="Tentang">
							<?= form_error('tentang', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input name="alamat" value="<?= set_value('alamat'); ?>" type="text" class="form-control" id="alamat" placeholder="Alamat">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="no_hp">No HP</label>
							<input name="no_hp" value="<?= set_value('no_hp'); ?>" type="text" class="form-control" id="no_hp" placeholder="No HP">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="status">Status</label>
							<input name="status" value="<?= set_value('status'); ?>" type="text" class="form-control" id="status" placeholder="Status">
							<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="buka-toko">Buka Toko</label>
							<input name="buka-toko" value="<?= set_value('buka-toko'); ?>" type="text" class="form-control" id="buka-toko" placeholder="Buka Toko">
							<?= form_error('buka-toko', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="tutup-toko">Tutup Toko</label>
							<input name="tutup-toko" value="<?= set_value('tutup-toko'); ?>" type="text" class="form-control" id="tutup-toko" placeholder="Tutup Toko">
							<?= form_error('tutup-toko', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('Toko') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Toko</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
	</section>
</section>
