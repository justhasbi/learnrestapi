<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Buku
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $buku['judul_buku']; ?></h5>
                    <h6 class="card-subtitle mb-4 text-muted"><?= $buku['jenis_buku']; ?></h6>
                    <p class="card-text text-muted">Nama Pengarang :</p>
                    <p class="card-text"><?= $buku['nama_pengarang']; ?></p>
                    <p class="card-text text-muted">Jumlah Halaman :</p>
                    <p class="card-text"><?= $buku['jml_halaman']; ?></p>
                    <a href="<?= base_url(); ?>book" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>