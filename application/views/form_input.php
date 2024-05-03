<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h3>Form Input Data</h3>

        <table>
            <form action="<?php echo base_url('Welcome/AksiInsert') ?>" method="post">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" required></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" required></td>
            </tr>

            <tr>
                <td>Tempat lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat" required></td>
            </tr>

            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl" required></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="Pria" required>Pria
                <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama" id="">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"></td>
            </tr>
            </form>
        </table>
    </body>
</html>