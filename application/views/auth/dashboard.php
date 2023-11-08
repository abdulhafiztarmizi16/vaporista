<section id="main-content">
	<section class="wrapper site-min-height">
		<h1 class="h3 mb-4 text-gray 800"><?php echo $judul; ?> </h1>
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<a href="<?= site_url('kue') ?>">
								<div class="row no-gutters align-item-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Produk</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $kue ?> </div>
									</div>
									<div class="col-auto">
										<i class="fas fa-book fa-2x text-gray-300"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
						<a href="<?= site_url('penjualan') ?>">
							<div class="row no-gutters align-item-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Penjualan</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $penjualan ?> </div>
								</div>
								<div class="col-auto">
									<i class="fas fa-book fa-2x text-gray-300"></i>
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
				<?php if ($user['role'] == 'Superadmin') : ?>
				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
						<a href="<?= site_url('settings') ?>">
							<div class="row no-gutters align-item-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $us ?> </div>
								</div>
								<div class="col-auto">
									<i class="fas fa-book fa-2x text-gray-300"></i>
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="card shadow mb-4">
				<div class="card-body">
					<div class="chart-bar">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</div>

	</section>
</section>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- <script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	})
	$(document).ready(function() {
		$("#jumlah").on('keydown keyup change blur', function() {
			var harga = $("#harga").val();
			var jumlah = $("#jumlah").val();

			var total = parseInt(harga) * parseInt(jumlah);
			$("#total").val(total);
			if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
				alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
				reset()
			}
		});

		function reset() {
			$('input[name="jumlah"]').val('')
			$('input[name="total"]').val('')
		}
	});
</script>
<script type="text/javascript">
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				<?php
				foreach ($totalb as $data) {
					echo "'" . $data['buku'] . "',";
				}
				?>
			],
			datasets: [{
				label: 'Jumlah Buku Terjual',
				backgroundColor: "#4e73df",
				hoverBackgroundColor: "#2e59d9",
				borderColor: "#4e73df",
				data: [
					<?php
					foreach ($totalb as $data) {
						echo $data['jum'] . ", ";
					}
					?>
				]
			}]
		},
		options: {
			maintainAspectRatio: false,
			layout: {
				padding: {
					left: 10,
					right: 25,
					top: 25,
					bottom: 0
				}
			},
			scales: {
				xAxes: [{
					time: {
						unit: 'buku'
					},
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						maxTicksLimit: 20
					},
					maxBarThickness: 50,
				}],
				yAxes: [{
					gridLines: {
						color: "rgb(234,236,244)",
						zeroLineColor: "rgb(234,236,244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					}
				}],
			},
			tooltips: {
				titleMarginBottom: 10,
				titleFontColor: '#6e707e',
				titleFontSize: 14,
				backgroundColor: "rgb(255,255,255)",
				bodyFontColor: "#858796",
				borderColor: "#dddfeb",
				borderWidth: 1,
				xPadding: 15,
				yPadding: 15,
				displayColors: false,
				caretPadding: 10,
			},
		}
	});
</script> -->
</body>

</html>