<!-- Begin Page Content -->
<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							Detail Kue
						</div>
						
						<div class="card-body content-panel">
							<h2 class="card-title"><?= $kue['nama']; ?></h2>
							<h6 class="card-subtitle mb-2 text-muted"><?= $kue['deskripsi']; ?></h6>
							<div class="row">
								<div class="col-md-4">ID Toko</div>
								<div class="col-md-2">:</div>
								<div class="col-md-6">
									<?php foreach ($toko as $t) : ?>
										<?php if ($kue['id_toko'] == $t['id']) { ?>
											<?= $t['nama']; ?>
										<?php } ?>
									<?php endforeach; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">Kategori Kue</div>
								<div class="col-md-2">:</div>
								<div class="col-md-6">
									<?php foreach ($kategori as $k) : ?>
										<?php if ($kue['kategori'] == $k['id']) { ?>
											<?= $k['nama']; ?>
										<?php } ?>
									<?php endforeach; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">Tanggal Masuk</div>
								<div class="col-md-2">:</div>
								<div class="col-md-6"><?= $kue['tanggal']; ?></div>
							</div>

							<div class="row">
								<div class="col-md-4">Status Kue</div>
								<div class="col-md-2">:</div>
								<div class="col-md-6"><?= $kue['status']; ?></div>
							</div>
							<div class="row">
								<div class="col-md-4">Jumlah Kue</div>
								<div class="col-md-2">:</div>
								<div class="col-md-6"><?= $kue['stok']; ?></div>
							</div>
							<div class="row">
								<div class="col-md-4">Harga Kue</div>
								<div class="col-md-2">:</div>
								<div class="col-md-6"><?= $kue['harga']; ?></div>
							</div>
							<div class="row">
								<div class="col-md-4">Rating</div>
								<div class="col-md-2">:</div>
								<div class="col-md-6"><?= $kue['rating']; ?></div>
							</div>
						</div>
						<div class="card-footer justify-content-center">
							<a href="<?= base_url('Kue') ?>" class="btn btn-danger">Tutup</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
