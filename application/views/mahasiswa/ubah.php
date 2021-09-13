<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Ubah Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'];?>" placeholder="nama">
                        <small class="form-text text-danger"><?= form_error('nama');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nrp">nrp</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $mahasiswa['nrp'];?>" placeholder="nrp">
                        <small class="form-text text-danger"><?= form_error('nrp');?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'];?>" placeholder="email">
                        <small class="form-text text-danger"><?= form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                        <?php foreach( $jurusan as $j ): ?>
                                <?php if( $j == $mahasiswa['jurusan'] ) : ?>
                                <option value="<?= $j; ?>" selected ><?= $j;?></option>
                                <?php else :?>
                                <option value="<?= $j; ?>"><?= $j;?></option>
                                <?php endif;?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right ml-1">Ubah data</button>
                    <button type="reset" class="btn btn-warning float-right ml-1">Reset</button>
                </form>
            </div>
        </div>

            


        </div>
    </div>

</div>