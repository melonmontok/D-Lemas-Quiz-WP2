<html>
    <head><title>Halaman Edit Form</title></head>
    <body>
    <h3>Form Edit Data</h3>

<table>
    <tr>
        <td>NIS</td>
        <td>:</td>
        <td>
            <input type="text" value="<?php echo $data_siswa->nis ?>">
            <input type="hidden" name="nis">
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php echo $data_siswa->nama ?>"></td>
    </tr>

    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="kelas" value="<?php echo $data_siswa->kelas ?>"></td>
    </tr>
    <tr>
        <td>Tempat lahir</td>
        <td>:</td>
        <td><input type="text" name="tempat" value="<?php echo $data_siswa->tempat ?>"></td>
    </tr>
    <tr>
        <td>Tanggal lahir</td>
        <td>:</td>
        <td><input type="date" name="tgl" value="<?php echo $data_siswa->tgl ?>"></td>
    </tr>
    
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" value="<?php echo $data_siswa->alamat ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio" name="jenis_kelamin" value="Pria" required checked>Pria
        <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><select name="agama" id="">
            <option value="Islam">Islam</option>
            <option value="Kristen" selected>Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Konghucu">Konghucu</option>
        </select></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="SIMPAN"></td>
    </tr>
</table>
    </body>
</html>