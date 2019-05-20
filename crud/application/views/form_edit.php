<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit</title>
</head>
<body>
    <table>
        <form action="<?= base_url(); ?>/DataMahasiswa/update_data" method="post">
            <input type="hidden" name="Id_Mhs" value="<?= $Id_Mhs; ?>">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama_Mhs" value="<?= $Nama_Mhs ?>"></td>
            </tr>
            <tr>
                <td>Kom</td>
                <td>:</td>
                <td><input type="text" name="Kom_Mhs" value="<?= $Kom_Mhs ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </form>
    </table>
</body>
</html>