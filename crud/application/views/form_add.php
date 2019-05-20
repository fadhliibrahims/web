<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Add</title>
</head>
<body>
    <table>
        <form action="<?= base_url(); ?>/DataMahasiswa/insert" method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama_Mhs" placeholder="Masukkan Nama Anda..."></td>
            </tr>
            <tr>
                <td>Kom</td>
                <td>:</td>
                <td><input type="text" name="Kom_Mhs" placeholder="Masukkan Kom Anda..."></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
</body>
</html>