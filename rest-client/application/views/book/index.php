<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>book/tambah" class="btn btn-primary">Tambah
                Data Buku</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Buku</h3>
            <?php if (empty($buku)) : ?>
                <div class="alert alert-danger" role="alert">
                Buku tidak ditemukan.
                </div>
            <?php endif; ?>
            

            <ul class="list-group">
                <?php foreach ($buku as $bk) : ?>
                <li class="list-group-item">
                    <?= $bk['judul_buku']; ?>

                    <a href="<?= base_url(); ?>book/hapus/<?= $bk['id_buku']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>

                    <a href="<?= base_url(); ?>book/ubah/<?= $bk['id_buku']; ?>"
                        class="badge badge-success float-right">ubah</a>

                    <a href="<?= base_url(); ?>book/detail/<?= $bk['id_buku']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>