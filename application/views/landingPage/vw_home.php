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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Vaporista On Sale</h2>
                </div>
            </div>
            <!-- <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div> -->
        </div>
    </div>
    </div>
    <!-- Banner Ends Here -->





    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Products</h2>
                        <a href="<?= base_url('product') ?>">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <?php
                // Sort array produk berdasarkan tanggal rilis (anda harus mengganti "tanggal_rilis" dengan nama kolom yang sesuai dalam array $kue)
                usort($kue, function ($a, $b) {
                    return strtotime($b['tanggal']) - strtotime($a['tanggal']);
                });

                // Batasi hasilnya hanya 6 produk terbaru
                $produk_terbaru = array_slice($kue, 0, 6);
                ?>

                <?php $i = 1; ?>
                <?php foreach ($produk_terbaru as $us) : ?>
                    <div class="col-md-4">
                        <div class="product-item" data-toggle="modal" data-target="#exampleModalCenter<?= $i; ?>">
                            <img src="<?= base_url('assets/img/kue/') . $us['gambar']; ?>" alt="">
                            <div class="down-content">
                                <h4><?= $us['nama'] ?></h4>
                                <h6>Rp. <?= number_format($us['harga'], 2, ',', '.'); ?></h6>
                                <span class="left">Stock <?= $us['stok'] ?></span>
                                <span class="right"><?= $us['poin'] ?> Poin</span>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach ?>

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
                                                <h6>Rp. <?= number_format($us['harga'], 2, ',', '.'); ?></h6>
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
                                                <span class="right"><?= $us['poin'] ?> Poin</span>
                                                <!-- Tambahkan informasi produk lainnya sesuai kebutuhan -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="btn btn-primary">Keranjang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach ?>





                <!-- <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="<?= base_url('assets/template/') ?>assets/images/product_02.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$30.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (21)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="<?= base_url('assets/template/') ?>assets/images/product_03.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$20.45</h6>
                <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="<?= base_url('assets/template/') ?>assets/images/product_04.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$15.25</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="<?= base_url('assets/template/') ?>assets/images/product_05.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$12.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (16)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="<?= base_url('assets/template/') ?>assets/images/product_06.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <h6>$22.50</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
            </div>
          </div> -->
            </div>
        </div>
    </div>

    <!-- <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?= base_url('assets/template/') ?>assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->