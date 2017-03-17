
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './koneksi.php';
include './Variable.php';

$dataPertama = mysql_query("select distinct(rule) from rule_pohon_keputusan where id_parent = 0");
$dataPertama = mysql_fetch_row($dataPertama)[0];

$temp[$dataPertama] = $_POST[$dataPertama];

$dataPertama = mysql_query("select * from rule_pohon_keputusan where rule = '" . $dataPertama . "' and variabel = '" . $_POST[$dataPertama] . "'");
$dataPertama = mysql_fetch_assoc($dataPertama);

while (true) {
    if ($dataPertama["kelayakan"] == "ya") {
        echo "Ya";
        break;
    } elseif ($dataPertama["kelayakan"] == "tidak") {
        echo "Tidak";
        break;
    } else {
        $dataPertama = mysql_query("select rule,id_parent from rule_pohon_keputusan where id_parent = '" . $dataPertama['id'] . "' limit 1");
        $dataPertama = mysql_fetch_assoc($dataPertama);

        $dataPertama = mysql_query("select * from rule_pohon_keputusan where rule = '" . $dataPertama['rule'] . "' and variabel = '" . $_POST[$dataPertama['rule']] . "' and id_parent = '" . $dataPertama['id_parent'] . "'");
        $dataPertama = mysql_fetch_assoc($dataPertama);
    }
}

if (!isset($_POST['ubah'])) {

    $query = "INSERT INTO `data_prediksi` (`no_pembiayaan`, `nama_anggota`, ";

    $keys = array_keys($variable);

    foreach ($keys as $value) {
        $query.= $value . ", ";
    }

    $query.= "`keputusan_c45`, "
            . "`rule`, "
            . "`value` "
            . ") VALUES ("
            . "'" . $_POST["pembiayaan"] . "', "
            . "'" . $_POST["anggota"] . "', ";

    foreach ($keys as $value) {
        $query.= "'" . $_POST[$value] . "', ";
    }

    $query.= "'" . $dataPertama['kelayakan'] . "', "
            . "'" . array_keys($temp)[0] . "',  "
            . "'" . $temp[array_keys($temp)[0]] . "' "
            . ")";

    mysql_query($query) or exit(mysql_error());
} else {
    $query = "UPDATE `data_prediksi` SET "
            . "`no_pembiayaan`='" . $_POST["pembiayaan"] . "', "
            . "`nama_anggota`='" . $_POST["anggota"] . "', ";

    $keys = array_keys($variable);

    foreach ($keys as $value) {
        $query .= "`" . $value . "`='" . $_POST[$value] . "', ";
    }

    $query .= "`keputusan_c45`='" . $dataPertama['kelayakan'] . "', "
            . "`rule`='" . $temp[array_keys($temp)[0]] . "' "
            . "WHERE  `id`=" . $_POST['ubah'] . ";";
    mysql_query($query) or exit(mysql_error());
}
?>

<script>window.location = 'tampil_testing.php?page=prediksi'</script>