<?php
include './head.php';
include './koneksi.php';
?>
<div class="selficon">
    <div class="row">
        <h3><strong>Prediksi</strong></h3>
    </div>
</div>
<hr>

<script>
    $().ready(function () {
        $('#formTesting').validate({
            rules: {
                notesting: {
                    required: true
                },
                namatesting: {
                    required: true
                }
            },
            message: {
                notesting: "harus diisi",
                namatesting: "harus diisi"
            }
        });
    });
</script>

<div class="inner-container">
    <h2><strong>Input Data Nasabah</strong></h2>

    <form class="form-horizontal" id="formTesting" name="formTesting" action="proses_prediksi.php" method="post" style="font-size: small; ">
        <?php
        if (isset($_GET['id'])) {
            $data = mysql_query("select * from data_prediksi where id = '" . $_GET['id'] . "'") or exit(mysql_error());
            $data1 = mysql_fetch_assoc($data);
            ?>
            <input type="hidden" name="ubah" value="<?php echo $_GET['id'] ?>">
            <div class="form-group">
                <label class="control-label col-sm-3" style="text-align: left">No Pembiayaan</label>
                <div class="col-sm-9">
                    <input class="form-control" id="notesting" name="notesting" type="text" value="<?php echo $data1['no_pembiayaan'] ?>">
                </div>
            </div> 

            <div class="form-group" >
                <label class="control-label col-sm-3" style="text-align: left">Nama Anggota</label>
                <div class="col-sm-9">
                    <input class="form-control" id="namatesting" name="namatesting" type="text" value="<?php echo $data1['nama_anggota'] ?>">
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
                                if ($value == $data1[$key]) {
                                    echo '<option selected = "true">' . $value . '</option>';
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
        } else {
            ?>
            <div class="form-group">
                <label class="control-label col-sm-3" style="text-align: left">No Pembiayaan</label>
                <div class="col-sm-9">
                    <input class="form-control" name="notesting" type="text" id="notesting">
                </div>
            </div> <div class="form-group" >
                <label class="control-label col-sm-3" style="text-align: left">Nama Anggota</label>
                <div class="col-sm-9">
                    <input class="form-control" name="namatesting" type="text" id="namatesting">
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
        }
        ?>

        <div class="row">
            <div class="col-md-3 col-md-offset-5">
                <button type="button" onclick="reset()" class="btn btn-info">Reset</button>
            </div>
            <div class="col-md-4">
                <input type="submit" value="Prediksi" name="submit" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
<form action="" method="GET">
    <div class="row col-md-12">
        <button type="button" class="btn btn-danger col-md-1" onclick="deleteAll('proses_delete_all_prediksi.php')">Delete All</button>
    </div>
</form>

<hr>

<script>

    $(document).ready(function () {
        $('#table_testing').DataTable({
            'scrollX': true
        });
    });
</script>

<div class="row">
    <table id="table_testing" class="display">
        <thead>
            <tr>

                <th>No.</th>
                <th>No Pembiayaan</th>
                <th>Nama Anggota</th>
                <?php
                include './Variable.php';

                $keys = array_keys(($variable));

                foreach ($keys as $value) {
                    echo '<th>' . str_replace("_", " ", $value) . '</th>';
                }
                ?>
                <th>Kelancaran</th>
                <th style="width: 100px">Action</th>
            </tr>
        </thead>

        <tbody>

            <?php
            include './koneksi.php';
            if (isset($_GET['search'])) {
                $data = mysql_query("select * from data_prediksi where tampil = 0 and nama_anggota like '%" . $_GET['search'] . "%'") or exit(mysql_error());
            } else {
                $data = mysql_query("select * from data_prediksi where tampil = 0") or exit(mysql_error());
            }


            $index = 0;

            while ($d = mysql_fetch_assoc($data)) {
                ?>
                <tr>
                    <td><?php echo ++$index ?></td>
                    <td><?php echo $d['no_pembiayaan'] ?></td>
                    <td><?php echo $d['nama_anggota'] ?></td>
                    <?php
                    $keys = array_keys(($variable));

                    foreach ($keys as $value) {
                        echo '<td>' . $d[$value] . '</td>';
                    }
                    ?>
                    <td><?php echo $d['keputusan_c45'] ?></td>
                    <td style="width: 500px">
                        <a href="?page=prediksi&id=<?php echo $d['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="proses_delete_prediksi.php?id=<?php echo $d['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    function deleteAll(url) {
        if (confirm("Apakah ingin menghapus semua data ?")) {
            window.location.href = url;
        }
    }

    function reset() {
        window.location.reload();
    }
</script>

<?php include './footer.php'; ?>