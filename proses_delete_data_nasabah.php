<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './koneksi.php';

mysql_query("delete from data_nasabah where id = '".$_GET['id']."'");

?>

<script>
    window.location.href = 'tampil_list_data_nasabah.php';
</script>