<!-- Begin Page Content -->
<section id="main-content">
	<section class="wrapper site-min-height">
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
				<div class="form-panel">
				<h4 class="mb"><i class="fa fa-angle-right"></i> Form Ubah Toko</h4>
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $toko['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input value="<?= $toko['nama']; ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="tentang">Tentang</label>
							<input value="<?= $toko['tentang']; ?>" name="tentang" type="text" class="form-control" id="tentang" placeholder="Tentang">
							<?= form_error('tentang', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input value="<?= $toko['alamat']; ?>" name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="no_hp">No HP</label>
							<input value="<?= $toko['no_hp']; ?>" name="no_hp" type="text" class="form-control" id="no_hp" placeholder="No HP">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="status">Status</label>
							<input value="<?= $toko['status']; ?>" name="status" type="text" class="form-control" id="status" placeholder="Status">
							<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="buka-toko">Buka Toko</label>
							<input value="<?= $toko['buka-toko']; ?>" name="buka-toko" type="text" class="form-control" id="buka-toko" placeholder="Buka Toko">
							<?= form_error('buka-toko', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="tutup-toko">Tutup Toko</label>
							<input value="<?= $toko['tutup-toko']; ?>" name="tutup-toko" type="text" class="form-control" id="tutup-toko" placeholder="Toko Tutup">
							<?= form_error('tutup-toko', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<a href="<?= base_url('Toko') ?>" class="btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Toko</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
	</section>
</section>
