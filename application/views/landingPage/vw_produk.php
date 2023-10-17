<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vaporista</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="shortcut icon" href="<?= base_url('assets/template/') ?>images/icon.png">

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="<?= base_url('assets/template/') ?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/template/') ?>css/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= base_url('assets/template/') ?>css/template-landingPage.css" rel="stylesheet">
</head>

<body style="background-color: black;">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('Home') ?>">
                    <i class="navbar-brand-icon bi-fire me-2" style="color: var(--primary-color);"></i>
                    <span>vaporista</span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                    <a href="<?= site_url('Auth/') ?>" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                        <i class="btn-icon bi-person-fill"></i>
                        <span>Login</span><!-- duplicated one bellow for pc -->
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto me-lg-4">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Owner</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="<?= site_url('Auth/') ?>" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-person-fill"></i>
                            <span>Login</span><!-- duplicated above one for mobile -->
                        </a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row text-center">

                    <div class="col-lg-12 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                        <h6>More Vapor Product</h6>

                        <h1 class="text-white mb-4 mt-3">STOP SMOKING <br> LET'S VAPING TOGETHER</h1>

                        <a href="#section_2" class="btn custom-btn smoothscroll me-3">Discover More</a>

                        <a href="#section_3" class="link link--kale smoothscroll">Meet the Owner</a>
                    </div>



                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="avatar-group d-flex flex-wrap align-items-center">
                            <img src="<?= base_url('assets/template/') ?>images/avatar/man1.jpg" class="img-fluid avatar-image" alt="">

                            <img src="<?= base_url('assets/template/') ?>images/avatar/man2.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                            <img src="<?= base_url('assets/template/') ?>images/avatar/man3.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                            <img src="<?= base_url('assets/template/') ?>images/avatar/man4.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                            <div class="reviews-group mt-3 mt-lg-0">
                                <strong>4.5</strong>

                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star"></i>

                                <small class="ms-3">2,564 reviews</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="reviews-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h6>Reviews</h6>

                        <h2 class="text-white">What people saying...</h2>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="custom-block d-flex flex-wrap">
                            <div class="custom-block-image-wrap d-flex flex-column">
                                <img src="<?= base_url('assets/template/') ?>images/avatar/man3.jpg" class="img-fluid avatar-image" alt="">

                                <div class="text-center mt-3">
                                    <span class="text-white">Abdul</span>

                                    <!-- <strong class="d-block text-white">Artist</strong> -->
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="reviews-group mb-3">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                </div>

                                <p class="mb-0">Toko ini adalah destinasi terbaik untuk vaping. Koleksi komprehensif, staf ramah, dan pelayanan yang tak tertandingi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 my-5 my-lg-0">
                        <div class="custom-block d-flex flex-wrap">
                            <div class="custom-block-image-wrap d-flex flex-column">
                                <img src="<?= base_url('assets/template/') ?>images/avatar/man1.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="text-center mt-3">
                                    <span class="text-white">Rahman</span>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="reviews-group mb-3">
                                    <strong>3.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>

                                <p class="mb-0">Toko vapor ini memiliki koleksi lengkap dengan staf yang ramah dan layanan yang luar biasa. Rekomendasi yang pasti.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="custom-block d-flex flex-wrap">
                            <div class="custom-block-image-wrap d-flex flex-column">
                                <img src="<?= base_url('assets/template/') ?>images/avatar/man2.jpg" class="img-fluid avatar-image" alt="">

                                <div class="text-center mt-3">
                                    <span class="text-white">Aldi</span>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="reviews-group mb-3">
                                    <strong>5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>

                                <p class="mb-0">Mereka selalu memiliki stok terbaik yang mencakup berbagai merek dan model perangkat vaping terbaru.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="contact-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 mx-auto">
                        <div class="custom-form ebook-download-form bg-white shadow">
                            <div class="text-center mb-5">
                                <h2 class="mb-1">Location Our Store</h2>
                            </div>

                            <div class="ebook-download-form-body">
                                <div class="input-group mb-4">
                                    <iframe style="border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.970560560694!2d101.39561894234699!3d0.46723220982347496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af3256314967%3A0x83a475297992436f!2sMarpoyan%20Damai%2C%20Pekanbaru%20City%2C%20Riau!5e0!3m2!1sen!2sid!4v1696996649241!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                                <div class="input-group mb-4">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <h6 class="mt-5">Say hi and talk to us</h6>

                        <h2 class="mb-4">Contact</h2>

                        <p class="mb-3">
                            <i class="bi-geo-alt me-2"></i>
                            <span><a href="https://maps.app.goo.gl/NdhecnMC6ZpvcV9cA" class="contact-link">
                                Marpoyan Damai</a></span> | <span><a href="https://wa.me/6281280647611?text=Halo,%20saya%20tertarik%20untuk%20membeli%20product%20vape%20anda" class="contact-link">
                                081280647611</a></span>
                        </p>
                        <p class="mb-3">
                            <i class="bi-geo-alt me-2"></i>
                            <span><a href="https://maps.app.goo.gl/NdhecnMC6ZpvcV9cA" class="contact-link">
                                Bukit Raya</a></span> | <span><a href="https://wa.me/6281280647611?text=Halo,%20saya%20tertarik%20untuk%20membeli%20product%20vape%20anda" class="contact-link">
                                081280647611</a></span>
                        </p>
                        <p class="mb-3">
                            <i class="bi-geo-alt me-2"></i>
                            <span><a href="https://maps.app.goo.gl/NdhecnMC6ZpvcV9cA" class="contact-link">
                                Harapan Raya</a></span> | <span><a href="https://wa.me/6281280647611?text=Halo,%20saya%20tertarik%20untuk%20membeli%20product%20vape%20anda" class="contact-link">
                                081280647611</a></span>
                        </p>

                        <p>
                            <a href="mailto:info@company.com" class="contact-link">
                                vaporista@store.com
                            </a>
                        </p>

                        <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                        <ul class="social-icon mb-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>

                        <p class="copyright-text">Copyright © vaporista store

                        </p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="<?= base_url('assets/template/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/jquery.sticky.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/click-scroll.js"></script>
    <script src="<?= base_url('assets/template/') ?>js/custom.js"></script>

</body>

</html>