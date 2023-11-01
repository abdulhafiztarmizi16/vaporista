<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>all vaporista</h4>
                    <h2>vaporista products</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="">
                            <h1><?= $user['poin']; ?></h1><br>
                            POIN <?= $user['nama']; ?>
                        </li>
                        <li>
                        <a style="color:#f33f3f;" href="<?= base_url('pertukaran')?>">RIWAYAT POIN<i class="fas fa-history fa-fw"></i></a>
                            
                        </li>
                        <!-- <li data-filter=".des">
                            <img src="<?= base_url('assets/template/') ?>assets/images/icon-1.png" alt="Featured"><br>
                            New Products
                        </li>
                        <li data-filter=".dev">
                            <img src="<?= base_url('assets/template/') ?>assets/images/icon-3.png" alt="Flash Deals"><br>
                            Best Deals
                        </li>
                        <li data-filter=".gra">
                            <img src="<?= base_url('assets/template/') ?>assets/images/icon-4.png" alt="Last Minute"><br>
                            Location
                        </li> -->
                    </ul>
                </div>
            </div>

            <?php
            // Define the number of items per page
            $itemsPerPage = 6;

            // Get the current page from the URL or any other method you're using
            $currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calculate the offset based on the current page
            $offset = ($currentpage - 1) * $itemsPerPage;

            // Slice the array to get items for the current page
            $produk_terbaru = array_slice($poin, $offset, $itemsPerPage);

            // Calculate the total number of pages
            $totalPages = ceil(count($poin) / $itemsPerPage);

            $i = 1;

            foreach ($produk_terbaru as $us) : ?>
                <div class="col-md-4">
                    <div class="product-item" data-toggle="modal" data-target="#exampleModalCenter<?= $i; ?>">
                        <img src="<?= base_url('assets/img/kue/') . $us['gambar']; ?>" alt="">
                        <div class="down-content">
                            <h4><?= $us['nama'] ?></h4>
                            <!-- <h6>Rp. <?= number_format($us['harga'], 2, ',', '.'); ?></h6> -->
                            <span class="left">Stock <?= $us['stok'] ?></span>
                            <span class="right"><?= $us['poin'] ?> Poin</span>
                        </div>
                    </div>
                </div>
            <?php $i++;
            endforeach;

            // Display pagination links
            // Display pagination links
            if ($totalPages > 1) : ?>
                <div class="col-md-12">
                    <ul class="pages">
                        <?php if ($currentpage > 1) : ?>
                            <li>
                                <a href="?page=<?php echo $currentpage - 1; ?>"><i class="fa fa-angle-double-left"></i></a>

                            </li>
                        <?php endif; ?>

                        <?php for ($page = 1; $page <= $totalPages; $page++) : ?>
                            <li class="<?php echo $page == $currentpage ? 'active' : ''; ?>">
                                <a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if ($currentpage < $totalPages) : ?>
                            <li>
                                <a href="?page=<?php echo $currentpage + 1; ?>"><i class="fa fa-angle-double-right"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endif;

            ?>




            <!-- Modal -->
            <?php $i = 1; ?>
            <?php foreach ($produk_terbaru as $us) : ?>
                <div class="modal fade" id="exampleModalCenter<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle<?= $i; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle<?= $i; ?>"><?= $us['nama']; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> -->
                            <div class="modal-body">
                                <div class="row product-item">
                                    <div class="col-md-6">
                                        <img style="height: 350px; object-fit: cover; width:100%" src="<?= base_url('assets/img/kue/') . $us['gambar']; ?>" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="down-content">
                                            <h4><?= $us['nama'] ?></h4>
                                            <!-- <h6>Rp. <?= number_format($us['harga'], 2, ',', '.'); ?></h6> -->
                                            <?php foreach ($toko as $p) : ?>
                                                <?php if ($us['id_toko'] == $p['id']) { ?>
                                                    <p style="margin-bottom:3px;"><b>Toko :</b> <?= $p['nama']; ?></p>
                                                    <!-- <input name="kategori" value="<?= $p['kategori']; ?>" type="text" readonly class="form-control" class="form-control" id="Kategori"> -->
                                                <?php } ?>
                                            <?php endforeach; ?>
                                            <?php foreach ($kategori as $p) : ?>
                                                <?php if ($us['kategori'] == $p['id']) { ?>
                                                    <p style="margin-bottom:3px;"><b>Kategori : </b><?= $p['kategori']; ?></p>
                                                    <!-- <input name="kategori" value="<?= $p['kategori']; ?>" type="text" readonly class="form-control" class="form-control" id="Kategori"> -->
                                                <?php } ?>
                                            <?php endforeach; ?>

                                            <p><b>Status :</b> <?= $us['status']; ?></p>
                                            <p><?= $us['deskripsi']; ?></p>
                                            <span class="left">Stock <?= $us['stok'] ?></span>
                                            <span class="right">Tukarkan <?= $us['poin'] ?> Poin</span>
                                            <!-- Tambahkan informasi produk lainnya sesuai kebutuhan -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <p style="color:#f33f3f;font-size:8pt;">*Poin akan berkurang begitu ditukar, jika transaksi ditolak maka poin akan dikembalikan, <i>pastikan poin mencukupi untuk ditukarkan</i></p>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('Profil/keranjang_poin/') . $us['id'] ?>" class="btn btn-primary">Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach ?>

        </div>
    </div>
</div>