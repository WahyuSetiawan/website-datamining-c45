
<?php
include './head.php';
include './koneksi.php';
?>
<div class="selficon">
    <div class="row">
        <div class="row">
            <h3><strong> Data Nasabah</strong></h3>
            <h2>Pemasukan data nasabah</h2>
        </div>

        <hr>

    </div>
</div>
<div class="selficon">

    <script src="js/jquery.validate.min.js"></script>
    <script>
        $().ready(function () {
            $('#formDataNasabah').validate({
                rules: {
                    no: {
                        required: true
                    },
                    nama: {
                        required: true
                    },
                    no_identitas: {
                        required: true
                    }
                },
                message: {
                    no: "harus diisi",
                    nama: "harus diisi",
                    no_identitas: "harus diisi"
                }
            });
        });
    </script>
</div>
<div class="inner-container">
    <h2><strong>Input Data Nasabah</strong></h2>

    <form name="formDataNasabah" id="formDataNasabah" class="form-horizontal" style="font-size: small" action="tampil_data_nasabah_daftar.php?page=daftar" enctype="multipart/form-data" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">No. Pembiayaan</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="no" id="no">
            </div>
        </div> <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">Nama Anggota</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="nama" id="nama">
            </div>
        </div> <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">No. Identitas</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="no_identitas" id="no_identitas">
            </div>
        </div> 
        <?php
        include "./Variable.php";

        $keys = array_keys($variable);

        foreach ($keys as $key) {
            ?>
            <div class="form-group">
                <label class="control-label col-sm-3" style="text-align: left"><?php echo str_replace("_", " ", $key) ?></label>
                <div class="col-sm-9">
                    <select class="form-control" name="<?php echo $key ?>">
                        <?php
                        foreach ($variable[$key] as $value) {
                            echo '<option>' . $value . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <?php
        }
        ?> 
        <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">Kelayakan</label>
            <div class="col-sm-9">
                <select class="form-control" name="kelayakan">
                    <option>Ya</option>
                    <option>Tidak</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-5">
                <button type="button" onclick="reset()" class="btn btn-info">Reset</button>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Save" name="submit" onsubmit="submit()" class="btn btn-success">
            </div>
        </div>
    </form>
    <p>
    <form method="POST" action="upload_file_data_nasabah.php" enctype="multipart/form-data">
        <div class="col-md-12 form-group">
            <label class="control-label col-sm-3">Upload file.csv</label>
            <div class="col-sm-4">
                <div>
                    <input type="file" name="file" class="form-control">
                </div>

            </div>
            <div class="col-md-1 col-md-offset-4">
                <input type="submit" class="btn btn-warning" value="Upload">
            </div>
        </div>
    </form>
</p>
</div>
<?php include './footer.php'; ?>
<script>
    function submit() {
        var form = document.getElementById("formDataNasabah");

        if (confirm("Apakah anda ingin menyimpan data nasabah ini ?")) {
            form.submit();
        }
    }

    function reset() {
        window.location.reload();
    }

    function uploadFile() {

    }
</script>