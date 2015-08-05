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
                <strong>----------------------------------------------------------</strong>
            </div>
            <div class="inner-container">
                <h2><strong>Input Data Nasabah</strong></h2>

                <form class="form-horizontal" action="proses_simpan_data_nasabah.php" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-3">No. Pembiayaan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="no">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Nama Anggota</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="nama">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">No. Identitas</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="no_identitas">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jenis Pembiayaan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jenis_pembiayaan">
                                <?php
                                include './Variable.php';

                                foreach ($variable['jenis_pembiayaan'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Pekerjaan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="pekerjaan">
                                <?php
                                foreach ($variable['pekerjaan'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Tanggungan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jumlah_tanggungan">
                                <?php
                                foreach ($variable['jumlah_tanggungan'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Pembiayaan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jumlah_pembiayaan">
                                <?php
                                foreach ($variable['jumlah_pembiayaan'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Keperluan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="keperluan">
                                <?php
                                foreach ($variable['keperluan'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jangka Waktu</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jangka_waktu">
                                <?php
                                foreach ($variable['jangka_waktu'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Agunan / Jaminan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="angunan/jaminan">
                                <?php
                                foreach ($variable['angunan'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Total Penghasilan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="total_penghasilan">
                                <?php
                                foreach ($variable['total_penghasilan'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Karakter</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="karakter">
                                <?php
                                foreach ($variable['karakter'] as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Kelayakan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="kelayakan">
                                <?php
                                foreach ($probabilitas as $value) {
                                    echo '<option>' . $value . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-md-offset-5">
                            <button type="button" class="btn btn-info">Reset</button>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                    <p>

                    <div class="col-md-12 form-group">
                        <label class="control-label col-sm-3">Upload file.csv</label>
                        <div class="col-sm-4">
                            <div>
                                <input type="file" name="file" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-1 col-md-offset-4">
                            <button type="button" class="btn btn-warning" title="Submit">Submit</button>
                        </div>
                    </div>
                    </p>
                </form>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>

