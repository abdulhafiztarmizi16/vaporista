<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row justify-content-center">
				<div class="col-md-8 ">
						<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i> Form Ubah Produk</h4>
							<form action="" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $kue['id']; ?>">
								<div class="form-group">
									<label for="id_toko">Nama Toko</label>
									<select name="id_toko" id="id_toko" class="form-control">
										<?php foreach ($toko as $t) : ?>
											<option value="<?= $t['id']; ?>" <?php if ($kue['id_toko'] == $t['id']) {
																					echo "selected";
																				} ?>><?= $t['nama']; ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('id_toko', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="kategori">Kategori Produk</label>
									<select name="kategori" id="kategori" class="form-control">
										<?php foreach ($kategori as $k) : ?>
											<option value="<?= $k['id']; ?>" <?php if ($kue['kategori'] == $k['id']) {
																					echo "selected";
																				} ?>><?= $k['nama']; ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="nama">Nama Produk</label>
									<input value="<?= $kue['nama']; ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Nama Produk">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input value="<?= $kue['deskripsi']; ?>" name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi">
									<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="poin">Poin</label>
									<input value="<?= $kue['poin']; ?>" name="poin" type="number" class="form-control" id="poin" placeholder="Poin">
									<?= form_error('poin', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="harga">Harga</label>
									<input value="<?= $kue['harga']; ?>" name="harga" type="number" class="form-control" id="harga" placeholder="Harga">
									<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="tanggal">Tanggal Masuk</label>
									<input value="<?= $kue['tanggal']; ?>" name="tanggal" type="date" class="form-control" id="tanggal" placeholder="Tanggal">
									<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<input value="<?= $kue['status']; ?>" name="status" type="text" class="form-control" id="status" placeholder="Status">
									<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="jumlah">Jumlah</label>
									<input value="<?= $kue['stok']; ?>" name="stok" type="number" class="form-control" id="stok" placeholder="Jumlah">
									<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<img src="<?= base_url('assets/img/kue/') . $kue['gambar']; ?>" style="width:100px" class="img-thumbnail">

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
