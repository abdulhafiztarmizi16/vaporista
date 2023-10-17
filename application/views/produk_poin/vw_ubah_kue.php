<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row justify-content-center">
				<div class="col-md-8 ">
						<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i> Form Ubah Kue</h4>
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $poin['id']; ?>">
								<div class="form-group">
									<label for="id_toko">Nama Toko</label>
									<select name="id_toko" id="id_toko" class="form-control">
										<?php foreach ($toko as $t) : ?>
											<option value="<?= $t['id']; ?>" <?php if ($poin['id_toko'] == $t['id']) {
																					echo "selected";
																				} ?>><?= $t['nama']; ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('id_toko', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="kategori">Kategori Kue</label>
									<select name="kategori" id="kategori" class="form-control">
										<?php foreach ($kategori as $k) : ?>
											<option value="<?= $k['id']; ?>" <?php if ($poin['kategori'] == $k['id']) {
																					echo "selected";
																				} ?>><?= $k['nama']; ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="nama">Nama Kue</label>
									<input value="<?= $poin['nama']; ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Nama kue">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input value="<?= $poin['deskripsi']; ?>" name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi">
									<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="rating">Rating</label>
									<input value="<?= $poin['rating']; ?>" name="rating" type="number" class="form-control" id="rating" placeholder="Rating">
									<?= form_error('rating', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="harga">Harga</label>
									<input value="<?= $poin['harga']; ?>" name="harga" type="number" class="form-control" id="harga" placeholder="Harga">
									<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="tanggal">Tanggal Masuk</label>
									<input value="<?= $poin['tanggal']; ?>" name="tanggal" type="date" class="form-control" id="tanggal" placeholder="Tanggal">
									<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<input value="<?= $poin['status']; ?>" name="status" type="text" class="form-control" id="status" placeholder="Status">
									<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="jumlah">Jumlah</label>
									<input value="<?= $poin['stok']; ?>" name="stok" type="number" class="form-control" id="stok" placeholder="Jumlah">
									<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<img src="<?= base_url('assets/img/kue/') . $poin['gambar']; ?>" style="width:100px" class="img-thumbnail">

									<div class="custom-file">
										<input type="file" class="custom-file-input" name="gambar" id="gambar">
										<label for="gambar" class="custom-file-label">Choose File</label>
									</div>
								</div>
								<a href="<?= base_url('Kue') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Kategori</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- /wrapper -->
</section>
