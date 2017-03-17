
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './koneksi.php';

if (isset($_POST['submit'])) {
    $bool = mysql_query("INSERT INTO `data_anggota` ("
            . "`no_pembiayaan`, "
            . "`nama_anggota`, "
            . "`karakter`, "
            . "`penghasilan`, "
            . "`jumlah_pembiayaan`, "
            . "`jangka_waktu`, "
            . "`jaminan`, "
            . "`kelancaran` "
            . ") "
            . "VALUES"
            . " ("
            . "'" . $_POST['no'] . "',"
            . "'" . $_POST['nama'] . "',"
            . "'" . $_POST['Karakter'] . "',"
            . "'" . $_POST['Jangka Waktu'] . "',"
            . "'" . $_POST['Pembiayaan'] . "',"
            . "'" . $_POST['Penghasilan'] . "',"
            . "'" . $_POST['Jaminan'] . "',"
            . "'" . $_POST['kelancaran'] . "';") or exit(mysql_error());

    if ($bool) {
        ?>
        <script>alert("Data Berhasil Disimpan")</script>
        <?php

    } else {
        ?>
        <script>alert('Data Gagal Disimpan')</script>
        <?php

    }
}
?>
