<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>book"> Kembali</a>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_buku" value="<?php $buku['id_buku'];?>">
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku" value="<?php $buku['judul_buku'];?>">
                            <small class="form-text text-danger"><?= form_error('judul_buku'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="jenis_buku">Jenis Buku</label>
                            <input type="text" name="jenis_buku" class="form-control" id="jenis_buku" value="<?php $buku['jenis_buku'];?>">
                            <small class="form-text text-danger"><?= form_error('jenis_buku'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama_pengarang">Nama Pengarang</label>
                            <input type="text" name="nama_pengarang" class="form-control" id="nama_pengarang" value="<?php $buku['nama_pengarang'];?>">
                            <small class="form-text text-danger"><?= form_error('nama_pengarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jml_halaman">Jumlah Halaman</label>
                            <input type="numeric" name="jml_halaman" class="form-control" id="jml_halaman" value="<?php $buku['jml_halaman'];?>">
                            <small class="form-text text-danger"><?= form_error('jml_halaman'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>