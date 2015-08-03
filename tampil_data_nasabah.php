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
                                <option>Murabahah</option>
                                <option>Qardhul Hasan</option>
                                <option>Musyarakah</option>
                                <option>Ijaroh</option>
                                <option>Mudharabah</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Pekerjaan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="pekerjaan">
                                <option>Usaha</option>
                                <option>Non Usaha</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Tanggungan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jumlah_tanggungan">
                                <option>0-2 Orang</option>
                                <option>>=3 Orang</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Pembiayaan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jumlah_pembiayaan">
                                <option><5 Juta</option>
                                <option>5 - 50 Juta</option>
                                <option>>50 Juta</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Keperluan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="keperluan">
                                <option>Tambah Modal</option>
                                <option>Beli Barang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jangka Waktu</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jangka_waktu">
                                <option>1 - 12 Bulan</option>
                                <option>13 - 24 Bulan</option>
                                <option>25 - 36 Bulan</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Agunan / Jaminan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="angunan/jaminan">
                                <option><10 Juta</option>
                                <option>10 - 50 Juta</option>
                                <option>>50 Juta</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Total Penghasilan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="total_penghasilan">
                                <option>< 4 Juta</option>
                                <option>4 - 7 Juta</option>
                                <option>> 7 Juta</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Karakter</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="karakter">
                                <option>Baik</option>
                                <option>Bermasalah</option>
                            </select>
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Kelayakan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="kelayakan">
                                <option>Ya</option>
                                <option>Tidak</option>
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

