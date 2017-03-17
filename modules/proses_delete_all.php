<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './koneksi.php';

mysql_query("delete from data_anggota");



echo "<script>window.location = 'tampil_data_nasabah_daftar.php?page=daftar'</script>";