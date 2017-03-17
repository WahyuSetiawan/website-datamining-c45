
<?php

echo "<script>window.location = 'tampil_data_nasabah_daftar.php?page=daftar'</script>";;
include './koneksi.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_FILES["file"]["size"] > 0) {
    $file = $_FILES["file"]["tmp_name"];
    $handle = fopen($file, "r");

    //mysql_query("truncate data_nasabah");
    while ($data = fgetcsv($handle, 1000, ",", "'")) {
        var_dump($data);
        mysql_query("INSERT INTO `data_anggota` ("
                        . "`no_pembiayaan`, "
                        . "`nama_anggota`, "
                        . "`Jenis_Pembiayaan`, "
                        . "`Pekerjaan`, "
                        . "`Jumlah_Tanggungan`, "
                        . "`Jumlah_Pembiayaan`, "
                        . "Keperluan_Pembiayaan, "
                        . "`Jangka_Waktu`, "
                        . "Jaminan,"
                        . "`Total_Penghasilan`,"
                        . "Karakter,"
                        . "Kelayakan "
                        . ") "
                        . "VALUES"
                        . " ("
                        . "'" . addslashes($data[0]) . "', "
                        . "'" . addslashes($data[1]) . "', "
                        . "'" . addslashes($data[2]) . "', "
                        . "'" . addslashes($data[3]) . "', "
                        . "'" . addslashes($data[4]) . "', "
                        . "'" . addslashes($data[5]) . "', "
                        . "'" . addslashes($data[6]) . "', "
                        . "'" . addslashes($data[7]) . "', "
                        . "'" . addslashes($data[8]) . "', "
                        . "'" . addslashes($data[9]) . "', "
                        . "'" . addslashes($data[10]) . "', "
                        . "'" . addslashes($data[11]) . "');
            ") or exit(mysql_error());
    }
}

    
    