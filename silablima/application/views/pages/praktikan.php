<div class="container">

    <?php if($this->session->flashdata('fd')) : ?>
    <div class="row mt-3 text-center">
        <div class="col-md-6 offset-md-3 alert alert-success">
            <h4><?= $this->session->flashdata('fd'); ?> Data Berhasil</h4>
        </div>
    </div>
    <br>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-7 offset-md-3">
            <h2 class="text-center">Daftar Praktikan</h2>
            <br>
            <button class="btn btn-primary"><a class="text-white" href="<?= base_url(); ?>pages/tambah">Tambah Data Praktikan</a></button>
            <br><br>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($praktikans as $praktikan) : ?>
                <tr>
                    <td><?php echo $i; $i++; ?></td>
                    <td><?php echo $praktikan["nim"]; ?></td>
                    <td><?php echo $praktikan["nama"]; ?></td>
                    <td>
                        <button class="btn btn-secondary"><a class="text-white" href="<?php base_url(); ?>ubah/<?= $praktikan["id"]; ?>">Ubah</a></button>
                        <button class="btn btn-danger"><a class="text-white" href="<?php base_url(); ?>hapus/<?= $praktikan["id"]; ?>" onclick="return confirm('Hapus?');">Hapus</a></button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>