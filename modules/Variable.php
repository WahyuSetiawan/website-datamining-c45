<?php

include_once './koneksi.php';

$variable = array();

$dataVariabel = mysql_query("select distinct(variabel) from variabel") or exit(mysql_error());


while ($dataVar = mysql_fetch_array($dataVariabel)){
    $datanilai = mysql_query("select * from variabel where variabel = '".$dataVar[0]."'") or exit(mysql_error());
    
    $array = array();
    $index = 0;
    while ($data = mysql_fetch_assoc($datanilai)){
        $array[$index++] = $data["nilai_variabel"];
    }
    
    $variable[$dataVar[0]] = $array;
} 

$probabilitas['Kelayakan'] = array('ya', 'tidak');
