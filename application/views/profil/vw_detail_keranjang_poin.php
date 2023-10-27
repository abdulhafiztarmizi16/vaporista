<section id="main-content">
	<section class="wrapper site-min-height">
		<div class="container-fluid">
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			<div class="row">
				<div class="col-md-12">
					<?= $this->session->flashdata('message');
					?>
					<?= $this->session->flashdata('danger');
					?>
				</div>
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<td>Tanggal</td>
								<td>Nama Produk</td>
								<td>Poin</td>
								<td>Jumlah</td>
								<td>Total Poin</td>
								<!-- <td>Sub Total</td> -->
								<td>Aksi</td>
							</tr>
						</thead>
						<tbody>
							<form action="<?= base_url('Profil/pesanan_poin'); ?>" method="POST" enctype="multipart/form-data">
								<?php
								function rupiah($angka)
								{
									$hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
									return $hasil_rupiah;
								}
								$i = 1;

								$chasback = 0.05;
								$total_bayar = 0;
								$total_tpoin = 0;
								
								// $total_p = 0; ?>
								<?php foreach ($keranjang as $us) :
									$total_bayar += $us['total'];
									// $total_tpoin += $us['tpoin'];

									$tchasback = $total_bayar * $chasback;
									$ttotal = $total_bayar - $tchasback;
									
								?>
									<tr>
										<td><?= $us['tanggal']; ?></td>
										<td><?= $us['nama']; ?></td>
										<td><?= $us['poin']; ?></td>
										<!-- <td>Rp. <?= number_format($us['harga'], 2, ',', '.');?></td> -->
										<td><?= $us['jumlah']; ?></td>
										<td><?= number_format($us['total']);?></td>
										<td><a href="<?= base_url('profil/delkeranjangpoin/') . $us['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></a></td>
									</tr>
									<input type="hidden" name="kue[]" value="<?= $us['id_kue']; ?>">
									<input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
									
									<input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
									<input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
									<!-- <input type="hidden" name="total_tpoin[]" value="<?= $us['poin']; ?>"> -->
									<?php $i++; ?>
								<?php endforeach; ?>
								<input type="hidden" name="p" value="<?= $poin['poin']; ?>">
								<input type="hidden" name="t" value="<?= $total_bayar ?>">
								<tr>
									<td>Alamat Pengiriman</td>
									<td colspan="5"><input name="alamat" type="text" class="form-control" id="alamat"></td>
								</tr>
								<tr>
									<td>Pengambilan</td>
									<td colspan="5">
										<select name="pembayaran" id="pembayaran" class="form-control">
											<option value=""hidden>Pilih pengambilan</option>
											<option value="Ambil Di Toko">Ambil Di Toko</option>
											<option value="Dikirim Ke Alamat">Dikirim Ke alamat</option>
											
											<!-- <option value="BNI">BNI</option>
											<option value="BNI">Kepri</option>
											<option value="BNI">BCA</option>
											<option value="BNI">Danamon</option> -->
										</select>
									</td>
								</tr>
								<tr id="toko" style="display: none;">
									<td>Toko</td>
									<td colspan="5">
										<select name="pembayaran" id="pembayaran" class="form-control">
											<option value=""hidden>Pilih pengambilan</option>
											<?php foreach ($toko as $us) :?>
												<option value="<?= $us['nama']; ?> di <?= $us['alamat']; ?>"><?= $us['nama']; ?> di <?= $us['alamat']; ?></option>
											<?php endforeach; ?>
											<!-- <option value="BNI">BNI</option>
											<option value="BNI">Kepri</option>
											<option value="BNI">BCA</option>
											<option value="BNI">Danamon</option> -->
										</select>
									</td>
								</tr>
								<!-- <tr>
									<td>Bukti Transfer</td>
									<td colspan="5">
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="gambar" id="gambar">
											<label for="gambar" class="custom-file-label">Choose File</label>
										</div>
									</td>
								</tr> -->
								<tr>
									<td>No Handphone</td>
									<td colspan="5"><input name="keterangan" type="number" class="form-control" id="keterangan" required></td>
								</tr>
								<tr>
									<!-- <td colspan="4" align="right"><strong>Total Poin : </strong></td>
									<td><?= $total_tpoin ?></td>                 -->
									<!-- <tr></tr> -->
									<td colspan="4" align="right"><strong>Jumlah Poin Yang Akan Ditukar : </strong></td>
									<td><?= $total_bayar; ?></td>
									<!-- <tr></tr>
									<td colspan="4" align="right"><strong>Total Cashback : </strong></td>
									<td><?= rupiah($tchasback); ?></td>
									<td>
									<tr></tr>
									<td colspan="4" align="right"><strong>Total Harga : </strong></td>
									<td><?= rupiah($ttotal); ?></td> -->
									<td>
										<input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control">
										<input type="hidden" name="bayar" value="<?= $total_bayar; ?>">
										<button type="submit" class="btn btn-primary" id='tukar_poin'><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>
									</td>
								</tr>
							</form>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</section>
