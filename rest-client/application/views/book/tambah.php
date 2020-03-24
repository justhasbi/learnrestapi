<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>book"> Kembali</a>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku">
                            <small class="form-text text-danger"><?= form_error('judul_buku'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="jenis_buku">Jenis Buku</label>
                            <input type="text" name="jenis_buku" class="form-control" id="jenis_buku">
                            <small class="form-text text-danger"><?= form_error('jenis_buku'); ?></small>
                            
                            <!-- <select class="form-control" id="jenis_buku" name="jenis_buku">
                                <option value="Novel">Novel</option>
                                <option value="Biografi">Biografi</option>
                                <option value="Sastra">Sastra</option>
                                <option value="Religi">Religi</option>
                                <option value="Komik">Komik</option>
                                <option value="Tutorial">Tutorial</option>
                            </select> -->
                        </div>

                        <div class="form-group">
                            <label for="nama_pengarang">Nama Pengarang</label>
                            <input type="text" name="nama_pengarang" class="form-control" id="nama_pengarang">
                            <small class="form-text text-danger"><?= form_error('nama_pengarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jml_halaman">Jumlah Halaman</label>
                            <input type="numeric" name="jml_halaman" class="form-control" id="jml_halaman">
                            <small class="form-text text-danger"><?= form_error('jml_halaman'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>