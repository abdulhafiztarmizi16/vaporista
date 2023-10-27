<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="float-left">
					<h1 class="h3 mb-4 text-gray 800"><?php echo $judul; ?> </h1>
				</div>
				<div class="float-right">
					<h1 class="h3 mb-4 text-gray 800">
						<!-- <a href="<?= base_url(); ?>Penjualan/tambah" class="btn btn-info mb-2">Tambah Penjualan</a> -->
						<a href="<?= base_url('Penjualan/export') ?>" class="btn btn-secondary btn-mb">
							<i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export
						</a>
					</h1>
				</div>
			</div>
			<div class="card-body card shadow mb-4">
				<div class="content-panel">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<td>No</td>
									<td>No Pembelian</td>
									<td>Tanggal</td>
									<td>Pelanggan</td>
									<!-- <td>Poin</td> -->
									<td>Pengambilan</td>
									<td>Total Poin</td>
									<td>No HP</td>
									<td>Status</td>
									<td>Aksi</td>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($penjualan as $us) : ?>
									<tr>
										<td><?= $i; ?>.</td>
										<td><?= $us['no_penjualan']; ?></td>
										<td><?= $us['tanggal']; ?></td>
										<td><?= $us['nama']; ?></td>
										<!-- <td><?= $us['jumlah']; ?></td> -->
										<td><?= $us['pembayaran']; ?></td>
										<td><?= ($us['total_poin']);?></td>
										<td><?= $us['keterangan']; ?></td>
										<td><?= $us['status']; ?></td>
										<td>
											<a href="<?= base_url('tukar_poin/detail/' . $us['no_penjualan']); ?>" class="btn btn-info">Detail</a>
											<?php if ($us['konfirm'] == 0) : ?>
												<a href="<?php echo site_url('tukar_poin/submitApproval/' . $us['id']); ?>" class="btn btn-info">Terima</a>
												<a href="<?php echo base_url('tukar_poin/ditolak/' . $us['id']); ?>" class="btn btn-info">Tolak</a>
											<?php endif; ?>

										</td>
									</tr>
									<?php $i++ ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>