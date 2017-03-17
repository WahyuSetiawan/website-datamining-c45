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
             <a href="index.php" class="btn-lg btn-primary">Home</a>
            <a class="btn-lg btn-primary" href="tampil_help.php">Help</a>
            <div class="selficon">
                <div class="row">
                    <h3><strong> Data Nasabah</strong></h3>
                </div>
            </div>
            <div class="selficon">
                <strong>----------------------------------------------------------</strong>
            </div>
            <p style="margin-top: 50px">
            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="search" type="text">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <input class="btn btn-primary" type="submit" value="Search"></input>
                    </div>
                </div>
            </form>
            <table class="table table-striped" style="font-size: smaller">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>No. Identitas</th>
                    <th>No. Pembayaran</th>
                    <th>Jumlah Tanggungan</th>
                    <th>Jumlah Pembiayaan</th>
                    <th>Jangka Waktu</th>
                    <th>Agunan/Jaminan</th>
                    <th>Total Penghasilan</th>
                    <th>Karakter</th>
                    <th>Keputusan</th>
                    <th>Keterangan</th>
                    <th>Tanggal Prediksi</th>
                    <th>Action</th>
                </tr>

                <?php
                include './koneksi.php';


                if (isset($_GET['search'])) {
                    $data = mysql_query("select * from data_prediksi join status_nasabah on status_nasabah.data_prediksi = data_prediksi.id where tampil = 1 and nama_anggota like '%" . $_GET['search'] . "%' ") or exit(mysql_error());
                } else {
                    $data = mysql_query("select * from data_prediksi join status_nasabah on status_nasabah.data_prediksi = data_prediksi.id where tampil = 1 ") or exit(mysql_error());
                }
                $index = 0;

                while ($d = mysql_fetch_assoc($data)) {
                    ?>
                    <tr class="<?php
                    if ($d['keterangan'] == "Whitelist") {
                        echo "success";
                    } else {
                        echo "danger";
                    }
                    ?>">
                        <td><?php echo ++$index ?></td>
                        <td><?php echo $d['nama_anggota'] ?></td>
                        <td><?php echo $d['no_identitas'] ?></td>
                        <td><?php echo $d['no_pembiayaan'] ?></td>
                        <td><?php echo $d['jumlah_tanggungan'] ?></td>
                        <td><?php echo $d['jumlah_pembiayaan'] ?></td>
                        <td><?php echo $d['jangka_waktu'] ?></td>
                        <td><?php echo $d['jaminan'] ?></td>
                        <td><?php echo $d['total_penghasilan'] ?></td>
                        <td><?php echo $d['karakter'] ?></td>
                        <td><?php echo $d['keputusan_c45'] ?></td>
                        <td><?php echo $d['keterangan'] ?></td>
                        <td style="width: 250px"><?php echo $d['current_time'] ?></td>
                        <td style="width: 300px">
                            <a href="print_data_nasabah.php?id=<?php echo $d['data_prediksi'] ?>" class="btn btn-warning btn-sm">Print</a>
                            <a onclick="del('proses_delete_prediksi.php?id=<?php echo $d['id'] ?>')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>

        </p>
    </div>
    <?php include './footer.php'; ?>
    <script src="javascript/control-javascript.js" type="text/javascript"></script>
</body>
</html>