<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './koneksi.php';

echo '<pre>';
var_dump($_POST);

if (isset($_POST)){
    mysql_query("INSERT INTO `db_ardun_data_mining`.`data_nasabah` ("
            . "`id`,"
            . "`nama`, "
            . "`no_identitas`, "
            . "`jenis_pembiayaan`, "
            . "`pekerjaan`, "
            . "`jumlah_tanggungan`, "
            . "`jumlah_pembiayaan`, "
            . "`keperluan`, "
            . "`jangka_waktu`, "
            . "`angunan/jaminan`, "
            . "`total_penghasilan`, "
            . "`karakter`"
            . ") "
            . "VALUES "
            . "("
            . "'".$_POST['no']."',"
            . "'".$_POST["nama"]."', "
            . "'".$_POST["no_identitas"]."', "
            . "'".$_POST["jenis_pembiayaan"]."', "
            . "'".$_POST["pekerjaan"]."', "
            . "'".$_POST["jumlah_tanggungan"]."', "
            . "'".$_POST["jumlah_pembiayaan"]."', "
            . "'".$_POST["keperluan"]."', "
            . "'".$_POST["jangka_waktu"]."', "
            . "'".$_POST["angunan/jaminan"]."', "
            . "'".$_POST["total_penghasilan"]."', "
            . "'".$_POST["karakter"]."');") or exit(mysql_error());
    
    echo "<script>window.location = 'tampil_list_data_nasabah.php'</script>";
}