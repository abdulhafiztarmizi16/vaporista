<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="float-left">
					<h1 class="h3 mb-4 text-gray 800"><?php echo $judul; ?> </h1>
				</div>
				<div class="float-right">
					<h1 class="h3 mb-4 text-gray 800">
						<a href="<?= base_url(); ?>Kue/tambah" class="btn btn-info mb-2">Tambah Produk</a>
					</h1>
				</div>
			</div>
			<div class="content-panel">
				<div class="card-body shadow mb-4">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<td>No</td>
									<td>Gambar</td>
									<td>Id Toko</td>
									<td>Kategori</td>
									<td>Nama</td>
									<td>Tanggal</td>
									<td>Deskripsi</td>
									<td>Status</td>
									<td>Stok</td>
									<td>Harga</td>
									<td>Poin</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($kue as $us) : ?>
									<tr>
										<td> <?= $i; ?>.</td>
										<td><img src="<?= base_url('assets/img/kue/') . $us['gambar']; ?>" style="width:80px" class="img-thumbnail"></td>
										<td><?php foreach ($toko as $p) : ?>
												<?php if ($us['id_toko'] == $p['id']) { ?>
													<?= $p['nama']; ?>
												<?php } ?>
											<?php endforeach; ?></td>
										<td><?php foreach ($kategori as $p) : ?>
												<?php if ($us['kategori'] == $p['id']) { ?>
													<?= $p['nama']; ?>
												<?php } ?>
											<?php endforeach; ?></td>
										<td><?= $us['nama']; ?></td>
										<td><?= $us['tanggal']; ?></td>
										<td><?= $us['deskripsi']; ?></td>
										<td><?= $us['status']; ?></td>
										<td><?= $us['stok']; ?></td>
										<td><?= $us['harga']; ?></td>
										<td><?= $us['poin']; ?></td>
										<td>
											<a href="<?= base_url('Kue/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
											<a href="<?= base_url('Kue/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
											<!-- <a href="<?= base_url('Kue/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a> -->
											<!-- button action -->
											<!-- <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
											<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
											<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button> -->
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