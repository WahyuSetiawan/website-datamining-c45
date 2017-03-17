<?php

include './koneksi.php';
include './Variable.php';
include './Algoritma_c45_core.php';
include './Algoritma_c45_generate.php';

/*
 * persiapan awal melakukan perhitungan
 */

$var = $variable;
$temporarygains = null;
$keys = array_keys($variable);

/*
 * persiapan awal untuk memasukan hasil perhitungan kedalam database
 * dari index dan penghapusan data lama
 */


/*
 * melakukan generate entropy dan gain 
 * per entitas
 */

$running = new runningAlgoritm($var, 'data_anggota', $probabilitas, $temporarygains);
$c45 = new algoritm_c45($running->getCotainer());

echo '<pre>';
var_dump($c45->getEntropy());
var_dump($c45->getGain());

$sortgain = $c45->getGain();
arsort($sortgain);

$minGain = array_search(min($sortgain), $sortgain);

mysql_query("delete from rule_pohon_keputusan");
mysql_query("delete from tampil_pohon_keputusan");
mysql_query("delete from tampil_rule_prediksi");

$parentsebelumnya = "awal";
$id_tree = 0;
$temp_data;
$idNode = 1;

foreach ($sortgain as $x => $x_value) {
    $id_t = $id_tree++;

    if ($parentsebelumnya == "awal") {
        foreach ($running->cotainer[$x] as $key => $value) {
            $kelayakan = "?";

            if ($value["tidak"] == 0) {
                $kelayakan = "ya";
            }

            if ($value["ya"] == 0) {
                $kelayakan = "tidak";
            }

            mysql_query("INSERT INTO `tampil_pohon_keputusan` ("
                    . "`id`, "
                    . "`variable`, "
                    . "`value`, "
                    . "`id_tree`, "
                    . "`id_parent`, "
                    . "`tidak`, "
                    . "`ya`, "
                    . "`kelayakan`) "
                    . "VALUES ("
                    . "'" . $idNode . "', "
                    . "'" . $x . "', "
                    . "'" . $key . "', "
                    . "'" . $id_t . "', "
                    . "" . 0 . ", "
                    . "" . $value["tidak"] . ", "
                    . "" . $value["ya"] . ", "
                    . "'" . $kelayakan . "');");

            mysql_query("insert into tampil_rule_prediksi ("
                            . "id,"
                            . "id_parent,"
                            . "`variable`,"
                            . "`value`, "
                            . "kelayakan"
                            . ") values ("
                            . "'" . $idNode . "',"
                            . "'" . 0 . "',"
                            . "'" . $x . "',"
                            . "'" . $key . "',"
                            . "'" . $kelayakan . "'"
                            . ")") or exit(mysql_error());

            mysql_query("insert into rule_pohon_keputusan ("
                    . "id,"
                    . "id_parent,"
                    . "`rule`,"
                    . "`variabel`, "
                    . "kelayakan"
                    . ") values ("
                    . "'" . $idNode . "',"
                    . "'" . 0 . "',"
                    . "'" . $x . "',"
                    . "'" . $key . "',"
                    . "'" . $kelayakan . "'"
                    . ")");

            $temp_data[$idNode] = " where " . $x . " = '" . $key . "' ";

            $idNode++;
        }
    } else {
        $query_tree = mysql_query("select * from tampil_pohon_keputusan where `variable` = '" . $parentsebelumnya . "'") or exit(mysql_error());

        while ($data_tree = mysql_fetch_assoc($query_tree)) {
            if ($data_tree["kelayakan"] == "?") {
                foreach ($running->cotainer[$x] as $key => $value) {

                    $temp_data[$idNode] = $temp_data[$data_tree["id"]] . " and " . $x . " = '" . $key . "' ";

                    $kelayakan = "?";

                    $resultYaTidak = mysql_query("select count(kelayakan) as tidak from data_anggota " . $temp_data[$idNode] . " and kelayakan = 'Tidak'");
                    $tidak = mysql_fetch_assoc($resultYaTidak);

                    if ($tidak["tidak"] == 0) {
                        $kelayakan = "ya";
                    }

                    $resultYaTidak = mysql_query("select count(kelayakan) as ya from data_anggota " . $temp_data[$idNode] . " and kelayakan = 'Ya'");
                    $ya = mysql_fetch_assoc($resultYaTidak);

                    if ($ya["ya"] == 0) {
                        $kelayakan = "tidak";
                    }

                    if ($x == $minGain) {
                        if ($ya["ya"] < $tidak["tidak"]) {
                            $kelayakan = "tidak";
                        }

                        if ($ya["ya"] > $tidak["tidak"]) {
                            $kelayakan = "ya";
                        }

                        if ($ya["ya"] == $tidak["tidak"]) {
                            $kelayakan = "?";
                        }
                    }

                    mysql_query("INSERT INTO `tampil_pohon_keputusan` ("
                            . "`id`, "
                            . "`variable`, "
                            . "`value`, "
                            . "`id_tree`, "
                            . "`id_parent`, "
                            . "`tidak`, "
                            . "`ya`, "
                            . "`kelayakan`) "
                            . "VALUES ("
                            . "'" . $idNode . "', "
                            . "'" . $x . "', "
                            . "'" . $key . "', "
                            . "'" . $id_t . "', "
                            . "" . $data_tree["id"] . ", "
                            . "" . $tidak['tidak'] . ", "
                            . "" . $ya['ya'] . ", "
                            . "'" . $kelayakan . "');");

                    mysql_query("insert into tampil_rule_prediksi ("
                            . "id,"
                            . "id_parent,"
                            . "`variable`,"
                            . "`value`, "
                            . "kelayakan"
                            . ") values ("
                            . "'" . $idNode . "',"
                            . "'" . $data_tree["id"] . "',"
                            . "'" . $x . "',"
                            . "'" . $key . "',"
                            . "'" . $kelayakan . "'"
                            . ")");

                    mysql_query("insert into rule_pohon_keputusan ("
                            . "id,"
                            . "id_parent,"
                            . "`rule`,"
                            . "`variabel`, "
                            . "kelayakan"
                            . ") values ("
                            . "'" . $idNode . "',"
                            . "'" . $data_tree["id"] . "',"
                            . "'" . $x . "',"
                            . "'" . $key . "',"
                            . "'" . $kelayakan . "'"
                            . ")");

                    $idNode++;
                }
            }
        }
    }

    $parentsebelumnya = $x;
}