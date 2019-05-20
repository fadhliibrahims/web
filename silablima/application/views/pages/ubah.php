<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Form Ubah Data Praktikan</h1>
            <?php $uri = 'pages/ubah/' . $praktikan["id"]; ?>
            <?php echo form_open($uri); ?>
                <input type="hidden" name="id" value="<?= $praktikan['id']; ?>">
               <div class="form-group">
                    <label for="nim">NIM : </label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" value="<?= $praktikan['nim']; ?>">
                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama">Nama : </label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $praktikan['nama']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
            </form>

            <br>
            <a href="<?= base_url(); ?>/pages/praktikan">Kembali ke Daftar Praktikan</a>
        </div>
    </div>
</div>
