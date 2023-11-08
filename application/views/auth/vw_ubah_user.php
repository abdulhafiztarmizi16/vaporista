<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Form Ubah User</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $getUserId['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input value="<?= $getUserId['nama']; ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Nama user" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="<?= $getUserId['email']; ?>" name="email" type="text" class="form-control" id="email" placeholder="email" readonly>
                            </div>
                            <label for="role">Role User</label>
                            <select name="role" id="role" class="form-control">
                                <option value="User" <?= ($getUserId['role'] === 'User') ? 'selected' : '' ?>>User</option>
                                <option value="Admin" <?= ($getUserId['role'] === 'Admin') ? 'selected' : '' ?>>Admin</option>
                                <option value="Superadmin" <?= ($getUserId['role'] === 'Superadmin') ? 'selected' : '' ?>>Superadmin</option>
                            </select>
                            <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                            <a href="<?= site_url('settings') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah User</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
</section>