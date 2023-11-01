<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2023 Vaporista</p>
            
            <!-- - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/template/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="<?= base_url('assets/template/') ?>assets/js/custom.js"></script>
    <script src="<?= base_url('assets/template/') ?>assets/js/owl.js"></script>
    <script src="<?= base_url('assets/template/') ?>assets/js/slick.js"></script>
    <script src="<?= base_url('assets/template/') ?>assets/js/isotope.js"></script>
    <script src="<?= base_url('assets/template/') ?>assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

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


  </body>

</html>

