<!-- Begin Page Content -->
<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row justify-content-center">
				<div class="col-md-8 ">
						<div class="form-panel">
						<h4 class="mb"><i class="fa fa-angle-right"></i> Form Tambah Kategori kue</h4>
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nama">Nama Kue</label>
									<input name="nama" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Kue">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="kategori">Kategori Kue</label>
									<input name="kategori" type="text" value="<?= set_value('kategori'); ?>" class="form-control" id="kategori" placeholder="Kategori Kue">
									<?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<a href="<?= base_url('Kategori') ?>" class="btn btn-danger">Tutup</a>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Kategori Kue</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</section>
