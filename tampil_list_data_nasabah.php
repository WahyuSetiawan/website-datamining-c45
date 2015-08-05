<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="css/layout.css" type="text/css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>

    <body class="body-costum">
        <?php include './title.php'; ?>
        <div class="selfcontainer">
            <div class="selficon">
                <div class="row">
                    <img src="image/data_nasabah.png"><h3><strong> Data Nasabah</strong></h3>
                </div>
            </div>
            <div class="selficon">
                <strong>----------------------------------------------------------</strong>
            </div>
            <div class="inner-container">
                <h2>Data Keseluruhan Nasabah</h2>
                <p>
                    <a href="tampil_data_nasabah.php" class="btn btn-primary">
                        Input Data Nasabah
                    </a>
                </p>
                <p>
                <div class="row">
                    <div class="col-md-offset-2 col-md-5">
                        <div class="form-group">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary" type="button"> Search</button>
                    </div>
                    <div class="col-md-2 col-md-offset-2">
                        <button class="btn-lg btn-danger">Delete All</button>
                    </div>

                </div>
                </p>
                <div style="display: table">
                    <table class="table table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>No. Identitas</th>
                            <th>Jenis Pembayaran</th>
                            <th>Pekerajaan</th>
                            <!--
                            <th>No. Pembayaran</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Jumlah Pembiayaan</th>
                            <th>Keperluan</th>
                            <th>Jangka Waktu</th>
                            <th>Aguna/Jaminan</th>-->
                            <th>Total Penghasilan</th>
                            <th>Karakter</th>
                            <th>Kelayakan</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        include './koneksi.php';

                        $result = mysql_query("SELECT * FROM `db_ardun_data_mining`.`data_nasabah` LIMIT 1000;") or exit(mysql_error());
                        while ($data = mysql_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['no_identitas'] ?></td>
                                <td><?php echo $data['jenis_pembiayaan'] ?></td>
                                <td><?php echo $data['pekerjaan'] ?></td>
                                <td><?php echo $data['total_penghasilan'] ?></td>
                                <td><?php echo $data['karakter'] ?></td>
                                <td><?php echo $data['kelayakan'] ?></td>
                                <td>
                                    <a href="proses_delete_data_nasabah.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>
                                    <a href="" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>

