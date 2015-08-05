<?php

include './koneksi.php';
include './Variable.php';
include './runningAlgoritm.php';
include './algoritm_c45.php';
echo '<pre>';

$running = new runningAlgoritm($variable, 'data_nasabah', $probabilitas);
$c45 = new algoritm_c45($running->getCotainer());
