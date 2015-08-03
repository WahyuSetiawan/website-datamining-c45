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
                    <img src="image/testing.png"><h3><strong>Testing</strong></h3>
                </div>
            </div>
            <div class="selficon">
                <strong>----------------------------------------------------------</strong>
            </div>
            <div class="inner-container">
                <h2><strong>Input Data Nasabah</strong></h2>

                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">No Pembiayaan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Nama Anggota</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">No. Identitas</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jenis Pekerjaan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Tanggungan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Pembiayaan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Keperluan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jangka Waktu</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Agunan / Jaminan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Total Penghasilan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Karakter</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div> <div class="form-group">
                        <label class="control-label col-sm-3">Kelayakan</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
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

                    <div>

                    </div>
                </form>
                
                <p>
                    <button type="button" class="btn btn-danger">Delete All</button>
                </p>
                
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
                </table>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>

