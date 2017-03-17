<script>
    window.location.href = 'tampil_list_data_nasabah.php';
</script>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './koneksi.php';

$return = mysql_query("delete from data_anggota where id = '" . $_GET['id'] . "'");

if ($return) {
    ?>
    <script>alert("Data Berhasil Dihapus")</script>
    <?php
}else{
    ?>
    <script>alert("Data Gagal Dihapus")</script>
    <?php
}
?>

