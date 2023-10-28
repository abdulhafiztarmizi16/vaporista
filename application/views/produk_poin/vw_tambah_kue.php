<!-- Begin Page Content -->
<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row justify-content-center">
				<div class="col-md-8 ">
					<div class="form-panel">
					<h4 class="mb"><i class="fa fa-angle-right"></i> Form Tambah Produk Poin</h4>
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="id_toko">ID Toko</label>
									<select name="id_toko" id="id_toko" value="<?= set_value('id_toko'); ?>" class="form-control">
										<option value="">Pilih Id</option>
										<?php foreach ($toko as $p) : ?>
											<option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('id_toko', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="kategori">Kategori Produk</label>
									<select name="kategori" id="kategori" value="<?= set_value('kategori'); ?>" class="form-control">
										<option value="">Pilih Kategori</option>
										<?php foreach ($kategori as $k) : ?>
											<option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="nama">Nama</label>
									<input name="nama" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Produk">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<input name="deskripsi" type="text" value="<?= set_value('deskripsi'); ?>" class="form-control" id="deskripsi" placeholder="Deskripsi">
									<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="poin">Poin</label>
									<input name="poin" value="<?= set_value('poin'); ?>" type="number" class="form-control" id="poin" placeholder="Poin">
									<?= form_error('poin', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="tanggal">Tanggal Masuk</label>
									<input name="tanggal" value="<?= set_value('tanggal'); ?>" type="date" class="form-control" id="tanggal" placeholder="Tanggal">
									<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<input name="status" value="<?= set_value('status'); ?>" type="text" class="form-control" id="status" placeholder="Status">
									<?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="jumlah">Jumlah Stok</label>
									<input name="stok" value="<?= set_value('stok'); ?>" type="number" class="form-control" id="stok" placeholder="Jumlah">
									<?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<!-- <div class="form-group">
									<label for="harga">Harga</label>
									<input name="harga" type="number" value="<?= set_value('harga'); ?>" class="form-control" id="harga" placeholder="Harga">
									<?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
								</div> -->
								<div class="form-group">
									<label for="kompetensi">Gambar</label>
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="gambar" id="gambar">
										<label for="gambar" class="custom-file-label">Choose File</label>
									</div>
								</div>
								<a href="<?= base_url('Poin') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Produk Poin</button>
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
