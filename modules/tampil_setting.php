
<?php
include './head.php';
include './koneksi.php';
?>
<div class="selficon">

    <?php
    if (isset($_POST['simpan'])) {
        mysql_query("insert into karyawan (username, password) values ('" . $_POST['username'] . "',md5('" . $_POST['password'] . "'))");
    } else if (isset($_POST['ubah'])) {
        mysql_query("update karyawan set username = '" . $_POST['username'] . "', password = md5('" . $_POST['password'] . "') where id = '" . $_POST['id'] . "'");
    }
    ?>
    <h3><strong>Halaman Setting Admin</strong></h3>
    <h3><strong>Aplikasi Data Mining Prediksi Kelancaran Kredit Nasabah</strong></h3>
    <hr>
    <form method="post" class="form-horizontal" action="?page=">
        <?php
        if (isset($_GET['id'])) {
            $result = mysql_query("select * from karyawan where id = '" . $_GET['id'] . "'");

            $data = mysql_fetch_assoc($result);
        }
        ?>
        <?php echo (isset($_GET['id'])) ? '<input type="hidden" name="id" value"' . $data['id'] . '"' : "" ?>
        <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">Username</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="username" value="<?php echo (isset($_GET['id'])) ? $data['username'] : "" ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" style="text-align: left">Password</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2 col-sm-offset-3">
                <button class="btn btn-success form-control" name="<?php echo (isset($_GET['id'])) ? "ubah" : "simpan" ?>"> Simpan </button>
            </div>
            <div class="col-sm-2 col-sm-offset-2">
                <button class="btn btn-danger form-control" > Batal </button>
            </div>
        </div>
    </form>

    <table class="display" id="datatable_admin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $hasil = mysql_query("select * from karyawan") or exit(mysql_error());


            $i = 1;
            while ($data = mysql_fetch_assoc($hasil)) {
                ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $data['username'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="?page=&id=<?php echo $data['id'] ?>">Ubah</a>
                        <a class="btn btn-danger" href="proses_hapus.php?id=<?php echo $data['id'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>


    <script>
        $(document).ready(function () {
            $('#datatable_admin').dataTable();
        });
    </script>



</div>
<?php include './footer.php'; ?>

