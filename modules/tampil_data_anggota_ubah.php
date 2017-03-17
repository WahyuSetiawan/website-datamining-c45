<?php include './head.php'; ?>
<div class="selficon">
    <div class="row">
        <h3><strong> Data Nasabah</strong></h3>
        <h2><strong>Ubah Data Nasabah</strong></h2>
    </div>
</div>

<hr>
<div class="inner-container">
    
    <?php
    include './koneksi.php';

    $data = mysql_query("select * from data_anggota where id = '" . $_GET['id'] . "'");
    $dataanggota = mysql_fetch_assoc($data);
    ?>

    <form name="formDataNasabah" class="form-horizontal" style="font-size: small" action="tampil_data_nasabah_daftar.php?page=daftar" enctype="multipart/form-data" method="POST">
        <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">
        <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">No. Pembiayaan</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="no" value="<?php echo $dataanggota['no_pembiayaan'] ?>">
            </div>
        </div> <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">Nama Anggota</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="nama" value="<?php echo $dataanggota['nama_anggota'] ?>">
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
                            if ($dataanggota[$key] == $value) {
                                ?>
                                <option selected="true"><?php echo $value ?></option>
                                <?php
                            } else {
                                echo '<option>' . $value . '</option>';
                            }
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
                    <?php
                    if ($dataanggota['kelayakan'] == 'Ya') {
                        ?>
                        <option selected="true">Ya</option>
                        <option>Tidak</option>
                        <?php
                    } else {
                        ?>
                        <option>Ya</option>
                        <option selected="true">Tidak</option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-5">
                <button type="button" onclick="reset()" class="btn btn-info">Reset</button>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Save" name="submitUbah" onsubmit="submit()" class="btn btn-success">
            </div>
        </div>
    </form>
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