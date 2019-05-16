<div class="container">

    <?php if($this->session->flashdata('fd')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <h4><?= $this->session->flashdata('fd'); ?> Data Berhasil</h4>
        </div>
    </div>
    <br>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <h1>Daftar Praktikan</h1>
        <br>
        <a href="<?= base_url(); ?>pages/tambah">Tambah Data Praktikan</a>
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
                    <a href="<?php base_url(); ?>ubah/<?= $praktikan["id"]; ?>">Ubah</a>
                    <a href="<?php base_url(); ?>hapus/<?= $praktikan["id"]; ?>" onclick="return confirm('Hapus?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </div>
</div>