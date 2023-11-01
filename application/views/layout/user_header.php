<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Vaporista</title>

    <!-- favicon -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/template/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon -->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/') ?>assets/css/owl.css">

</head>

<body>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('/') ?>">
                    <h2>VAPO <em>RISTA</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!-- nav tampil disemua -->
                        <li class="nav-item">
                            <a class="nav-link<?= (current_url() == base_url('/')) ? ' active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?= (current_url() == base_url('product')) ? ' active' : '' ?>" href="<?= base_url('product') ?>">Product</a>
                        </li>
                        
                        <?php
                        if ($user && $user['role'] == 'User') {
                        ?>
                            <!-- nav ketika user login -->
                            <li class="nav-item">
                                <a class="nav-link<?= (current_url() == base_url('penukaran')) ? ' active' : '' ?>" href="<?= base_url('penukaran') ?>">Tukarkan Poin</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link<?= (current_url() == base_url('auth')) ? ' active' : '' ?>" href="<?= base_url('auth') ?>">Profil</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link<?= (current_url() == base_url('pembelian')) ? ' active' : '' ?>" href="<?= base_url('pembelian') ?>">
                                    Riwayat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= (current_url() == base_url('logout')) ? ' active' : '' ?>" href="<?= base_url('logout') ?>">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= (current_url() == base_url('keranjang')) ? ' active' : '' ?>" href="<?= base_url('keranjang') ?>">
                                    <i class="fas fa-shopping-cart fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">
                                        <?= $jlh ?>
                                    </span>
                                </a>
                            </li>

                            </a>
                        <?php
                        } elseif ($user && $user['role'] == 'Admin') {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link<?= (current_url() == base_url('Dashboard')) ? ' active' : '' ?>" href="<?= base_url('Dashboard') ?>">Dashboard</a>
                            </li>
                        <?php
                        } else {
                        ?>
                        <!-- nav hilang ketika telah login -->
                            <li class="nav-item">
                                <a class="nav-link<?= (current_url() == base_url('auth')) ? ' active' : '' ?>" href="<?= base_url('auth') ?>">Login</a>
                            </li>
                        <?php
                            }
                        ?>



                        <!-- <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>