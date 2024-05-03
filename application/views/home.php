<html>
    <head>
        <title>Di-Lemas</title>
    </head>

    <body>
        <h1>Form Admin Input Data</h1>
        <h3>(Data Mahasiswa)</h3>

        <button onClick="document.location.href='<?php echo base_url('Welcome/formInput')?>'">Tambah Mahasiswa</button>

        <table>
            <tr>
                <td> <b>No</b> </td>
                <td><b>NIS</b></td>
                <td><b>Nama Siswa</b></td>
                <td><b>Kelas</b></td>
                <td><b>Tanggal Lahir</b></td>
                <td><b>Tempat lahir</b></td>
                <td><b>Alamat</b></td>
                <td><b>Jenis Kelamin</b></td>
                <td><b>Agama</b></td>
            </tr>
            <?php
                $count = 0;
                foreach($data_siswa as $row){
                    $count = $count + 1;
            ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row->nis ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->kelas ?></td>
                <td><?php echo $row->tgl ?></td>
                <td><?php echo $row->tempat ?></td>
                <td><?php echo $row->alamat ?></td>
                <td><?php echo $row->jenis_kelamin ?></td>
                <td><?php echo $row->agama ?></td>
                <td><a href="<?php echo base_url('Welcome/formEdit/').$row->nis ?>">Edit</a></td>
                <td><input type="delete" value="delete"></td>
                
            </tr>
            <?php } ?>
        </table>
    </body>
</html>