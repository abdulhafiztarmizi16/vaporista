<section class="container-fluid">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<!-- Page Heading -->
			<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
			<div class="row">
				<?= $this->session->flashdata('message');
				?>
				<div class="col-md-12">
					<?php $i = 1; ?>
					<?php foreach ($kue as $us) : ?>
						<a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" style="text-decoration: none; color:inherit;">
							<div class="col-md-4 col-sm-4">
								<div class="card text-black" style="height: fit-content;">
									<!-- <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i> -->
									<img style="width: auto; height: 250px; object-fit:cover;" src="<?= base_url('assets/img/kue/') . $us['gambar']; ?>" class="card-img-top" alt="Apple Computer" />
									<div class="card-body">
										<div class="text-center">
											<h3 class="card-title"><?= $us['nama'] ?></h3>
											<p class="text-muted mb-4"><?= $us['tanggal'] ?></p>
										</div>
										<div>
											<div class="d-flex justify-content-between">
												<span>Dapatkan Poin</span><span><?= $us['poin'] ?></span>
											</div>
											<div class="d-flex justify-content-between">
												<span>Stok Produk</span><span><?= $us['stok'] ?> Pcs</span>
											</div>
											<div class="d-flex justify-content-between">
												<span>Toko</span><span>
													<td><?php foreach ($toko as $p) : ?>
															<?php if ($us['id_toko'] == $p['id']) { ?>
																<?= $p['nama']; ?>
															<?php } ?>
														<?php endforeach; ?></td>
												</span>
											</div>
											<div class="d-flex justify-content-between">
												<span>Status</span><span><?= $us['status'] ?></span>
											</div>
										</div>
										<div class="d-flex justify-content-between total font-weight-bold mt-4">
											<span>Harga</span><span>Rp. <?= number_format($us['harga'], 2, ',', '.');?></span>
										</div>
									</div>
								</div>
							</div>
						</a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
</section>
