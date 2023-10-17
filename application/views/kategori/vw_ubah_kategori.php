<section id="main-content">
	<section class="wrapper site-min-height">
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">				
				<div class="form-panel">
				<h4 class="mb"><i class="fa fa-angle-right"></i> Form Ubah Kategori</h4>
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $kategori['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input value="<?= $kategori['nama']; ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Nama kue">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
				<div class="form-group">
					<label for="kategori">Kategori Kue</label>
					<input value="<?= $kategori['kategori']; ?>" name="kategori" type="text" class="form-control" id="kategori" placeholder="Kategori Kue">
					<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<a href="<?= base_url('Kategori') ?>" class="btn btn-danger">Tutup</a>
				<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Kategori</button>
				</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
	</section>
</section>
