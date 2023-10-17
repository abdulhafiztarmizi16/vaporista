<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="float-left">
					<h1 class="h3 mb-4 text-gray 800"><?php echo $judul; ?> </h1>
				</div>
				<div class="float-right">
					<h1 class="h3 mb-4 text-gray 800">
						<a href="<?= base_url(); ?>Kategori/tambah" class="btn btn-info mb-2">Tambah Kategori</a>
					</h1>
				</div>
			</div>
			<div class="content-panel">
			<div class="adv-table">
					<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<td>No</td>
									<td>Nama Kue</td>
									<td>Kategori Kue</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($kategori as $us) : ?>
									<tr>
										<td> <?= $i; ?>.</td>
										<td><?= $us['nama']; ?></td>
										<td><?= $us['kategori']; ?></td>
										<td>
											<a href="<?= base_url('Kategori/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
											<a href="<?= base_url('Kategori/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
										</td>
									</tr>
									<?php $i++; ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
