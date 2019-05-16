<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Form Tambah Data Praktikan</h1>

            <?php echo form_open('pages/tambah'); ?>
               <div class="form-group">
                    <label for="nim">NIM : </label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama">Nama : </label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <button type="submit" class="btn" name="tambah">Tambah</button>
            </form>

            <br>
            <a href="<?= base_url(); ?>/pages/praktikan">Kembali ke Daftar Praktikan</a>
        </div>
    </div>
</div>
