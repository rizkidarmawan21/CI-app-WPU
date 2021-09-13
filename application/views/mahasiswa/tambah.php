<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                        <small class="form-text text-danger"><?= form_error('nama');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nrp">nrp</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" placeholder="nrp">
                        <small class="form-text text-danger"><?= form_error('nrp');?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                        <small class="form-text text-danger"><?= form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        </select>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right ml-1">Tambah data</button>
                    <button type="reset" class="btn btn-warning float-right ml-1">Reset</button>
                </form>
            </div>
        </div>

            


        </div>
    </div>

</div>