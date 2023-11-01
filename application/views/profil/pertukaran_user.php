<section class="container-fluid">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row">
				<div class="col-md-12">
					<?= $this->session->flashdata('message'); ?>
					<table class="table">
						<thead>
							<tr>
								<td>No</td>
								<td>No Pertukaran</td>
								<td>Tanggal</td>
								<td>Total Poin</td>
								<td>Status</td>
								<!-- <td>Aksi</td> -->
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($pertukaran as $us) : ?>
								<tr>
									<td><?= $i; ?>.</td>
									<td><?= $us['no_penjualan']; ?></td>
									<td><?= $us['tanggal']; ?></td>
									<td><?= $us['total_poin']; ?></td>
									<!-- <td>Rp. <?= number_format($us['total_bayar'], 2, ',', '.');?></td> -->
									<td><?= $us['status']; ?></td>
									<!-- <td>
										<a href="<?= base_url('Profil/statustukar/' . $us['no_penjualan']); ?>" class="badge badge-warning">Detail</a>
									</td> -->
								</tr>
								<?php $i++ ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</section>
