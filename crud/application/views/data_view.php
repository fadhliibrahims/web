<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1" style="border-collapse: collapse;">
        <tr style="background: grey;">
            <td>NIM</td>
            <td>Nama</td>
            <td>Kom</td>
            <td colspan="2"></td>
        </tr>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td><?= $row['Id_Mhs']; ?></td>
            <td><?= $row['Nama_Mhs']; ?></td>
            <td><?= $row['Kom_Mhs']; ?></td>
            <td><a href="<?= base_url(); ?>DataMahasiswa/edit_data/<?= $row['Id_Mhs']; ?>">Edit</a></td>
            <td><a href="<?= base_url(); ?>DataMahasiswa/delete_data/<?= $row['Id_Mhs']; ?>">Delete</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    <a href="<?= base_url(); ?>DataMahasiswa/add_data">Insert</a>
</body>
</html>