<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print_r($_GET);

include './koneksi.php';

$data = mysql_query("select karakter from data_prediksi where id = " . $_GET["id"]);
$data = mysql_fetch_row($data)[0];

if ($data == "Baik") {
    mysql_query("INSERT INTO `db_data_mining`.`status_nasabah` (`data_prediksi`,`keterangan`) VALUES (" . $_GET["id"] . ",'Whitelist');");
} else {
    mysql_query("INSERT INTO `db_data_mining`.`status_nasabah` (`data_prediksi`,`keterangan`) VALUES (" . $_GET["id"] . ",'Whitelist');");
}

mysql_query("UPDATE `db_data_mining`.`data_prediksi` SET `tampil`=1 WHERE  `id`=" . $_GET['id'] . ";");

?>

<script>window.location = 'tampil_testing.php'</script>
