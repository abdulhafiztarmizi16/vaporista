<!-- /MAIN CONTENT -->
<!--main content end-->
<!--footer start-->
<footer class="site-footer">
	<div class="text-center">
		<p>
			&copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
		</p>
		<div class="credits">
			<!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
			Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
		</div>
		<a href="blank.html#" class="go-top">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
</footer>
<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/') ?>lib/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url('assets/') ?>lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url('assets/') ?>lib/jquery.scrollTo.min.js"></script>
<script src="<?= base_url('assets/') ?>lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?= base_url('assets/') ?>lib/chart-master/Chart.js"></script>
<!--common script for all pages-->
<script src="<?= base_url('assets/') ?>lib/common-scripts.js"></script>
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	})
	$(document).ready(function() {
		$("#jumlah").on('keydown keyup change blur', function() {
			var harga = parseFloat($("#harga").val());
			var jumlah = parseFloat($("#jumlah").val());
			var poin = parseFloat($("#poin").val());

			var tpoin = poin * jumlah;
			$("#tpoin").val(tpoin);

			var total = harga * jumlah;
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
	$(document).ready(function() {
		$("#jumlah_poin").on('keydown keyup change blur', function() {
			// var harga = parseFloat($("#harga").val());
			var jumlah = parseFloat($("#jumlah_poin").val());
			var poin = parseFloat($("#poin").val());

			// var tpoin = poin * jumlah;
			// $("#tpoin").val(tpoin);

			var total = poin * jumlah;
			$("#total").val(total);
			if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
				alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
				reset()
			}
		});

		function reset() {
			$('input[name="jumlah_poin"]').val('')
			$('input[name="total"]').val('')
		}
	});
	document.getElementById('pembayaran').addEventListener('change', function() {
        var manualOptionDiv = document.getElementById('toko');
        if (this.value === 'Ambil Di Toko') {
            manualOptionDiv.style.display = '';
        } else {
            manualOptionDiv.style.display = 'none';
        }
    });
</script>
<!-- <script>
		$(document).ready(function() {
			$("#tukar_poin").click(function(){
			// var harga = parseFloat($("#harga").val());
				var jumlah = parseFloat($("#p").val());
				var poin = parseFloat($("#t").val());

				// var tpoin = poin * jumlah;
				// $("#tpoin").val(tpoin);

				// var total = poin * jumlah;
				// $("#total").val(total);
				if (p<=t) {
					alert('Poin tidak mencukupi untuk ditukar, Silahkan cek poin anda terlebih dahulu!');
					reset()
				}
			});
			
			function reset() {
				$('input[name="keterangan"]').val('');
				// $('input[name="total"]').val('')
			}
		}); -->
<!-- </script> -->
<script type="text/javascript">
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				<?php
				foreach ($totalb as $data) {
					echo "'" . $data['kue'] . "',";
				}
				?>
			],
			datasets: [{
				label: 'Jumlah Kue Terjual',
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
						unit: 'kue'
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
</script>

<!--script for this page-->
</body>

</html>