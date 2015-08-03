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
                <img src="image/data_nasabah.png">
                <h3><strong>Home</strong></h3>
                <h1>--------------------</h1>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-1">
                    <a href="tampil_list_data_nasabah.php">
                        <img src="image/data_nasabah.png" class="thumbnail icon-home">
                    </a>
                    <p>
                        <strong>Data Nasabah</strong>
                    </p>
                </div>
                <div class="col-md-2">
                    <a href="tampil_pohon_keputusan.php">
                        <img src="image/pohon_keputusan.jpg" class="thumbnail icon-home">
                    </a>
                    <p>
                        <strong>Pohon Keputusan</strong>
                    </p>
                </div>
                <div class="col-md-2">
                    <a href="tampil_testing.php">
                        <img src="image/testing.png" class="thumbnail icon-home">
                    </a>
                    <p>
                        <strong>Testing</strong>
                    </p>
                </div>
                <div class="col-md-2">
                    <a href="tampil_status_nasabah.php">
                        <img src="image/status_nasabah.png" class="thumbnail icon-home">
                    </a>
                    <p>
                        <strong>Status Nasabah</strong>
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="image/logout.png" class="thumbnail icon-home">
                    <p>
                        <strong>Log Out</strong>
                    </p>
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>
    </body>
</html>
