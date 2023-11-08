<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray 800"><?php echo $judul; ?> </h1>
                </div>
                <div class="float-right">
                    <h1 class="h3 mb-4 text-gray 800">
                        <a href="<?= site_url('Dashboard/tambah'); ?>" class="btn btn-info mb-2">Tambah User</a>
                    </h1>
                </div>
            </div>
            <div class="content-panel">
                <div class="adv-table">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Poin</td>
                                    <td>Role</td>
                                    <td>Tanggal</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($getUser as $us) : ?>
                                    <tr>
                                        <td> <?= $i; ?>.</td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['email']; ?></td>
                                        <td><?= $us['poin']; ?></td>
                                        <td><?= $us['role']; ?></td>
                                        <td><?= $us['date_created']; ?></td>
                                        <td>
                                            <?php if ($us['role'] !== 'Superadmin') : ?>
                                                <a href="javascript:void(0);" class="badge badge-danger" onclick="confirmDelete(<?= $us['id']; ?>)">Hapus</a>
                                                <a href="<?= site_url('Dashboard/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<script>
    function confirmDelete(userId) {
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            // Jika pengguna menekan OK pada kotak konfirmasi
            // Redirect atau lakukan penghapusan data
            window.location.href = "<?= site_url('Dashboard/hapus/') ?>" + userId;
        }
    }
</script>