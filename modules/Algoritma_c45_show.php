<?php

include './koneksi.php';

$jarak = "-";

echo "<pre>";
echo "Pohon Keputusan";
echo "</pre>";

$result = mysql_query("select * from tampil_pohon_keputusan order by id_tree desc");
if ($data = mysql_fetch_assoc($result)) {

    $count = $data["id_tree"];


    $temp = 0;
    $akhir = "";

    $temp_tree;
    $temp_jadi;
    $temp_sebelumnya;


    for ($count; $count >= 0; $count--) {
        $datatree = mysql_query("select * from tampil_pohon_keputusan WHERE id_tree = '" . $count . "'");

        while ($row = mysql_fetch_assoc($datatree)) {
            $temp_sebelumnya[$row["id"]] = $row;
            $temp_sebelumnya[$row["id"]]["object"] = (object) $row;
            $keys = array_keys($temp_sebelumnya);

            for ($index = 0; $index < count($keys); $index++) {
                if ($temp_sebelumnya[$keys[$index]]["id_parent"] == $row["id"]) {
                    $temp_sebelumnya[$row["id"]][$keys[$index]] = $temp_sebelumnya[$keys[$index]];
                }
            }

            if ($row["id_parent"] == 0) {
                $temp_tree[$row["id"]] = $temp_sebelumnya[$row["id"]];
            }
        }
    }
    print_tree($temp_tree);

    echo $akhir;

    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo "<pre>";
    echo "Rule Prediksi";
    echo "</pre>";

    unset($temp_tree);

    $result = mysql_query("select * from tampil_rule_prediksi order by id_parent desc");
    $data = mysql_fetch_assoc($result);

    $count = $data["id_parent"];


    $temp = 0;
    $akhir = "";

    $temp_tree;
    $temp_jadi;
    $temp_sebelumnya;


    for ($count; $count >= 0; $count--) {
        $datatree = mysql_query("select * from tampil_rule_prediksi WHERE id_parent = '" . $count . "'");

        while ($row = mysql_fetch_assoc($datatree)) {
            $temp_sebelumnya[$row["id"]] = $row;
            $temp_sebelumnya[$row["id"]]["object"] = (object) $row;
            $keys = array_keys($temp_sebelumnya);

            for ($index = 0; $index < count($keys); $index++) {
                if ($temp_sebelumnya[$keys[$index]]["id_parent"] == $row["id"]) {
                    $temp_sebelumnya[$row["id"]][$keys[$index]] = $temp_sebelumnya[$keys[$index]];
                }
            }

            if ($row["id_parent"] == 0) {
                $temp_tree[$row["id"]] = $temp_sebelumnya[$row["id"]];
            }
        }
    }

    print_tree_prediksi($temp_tree);
    echo $akhir;
    echo '<br>';
    echo '<br>';
    echo '<br>';
}

function print_tree($array, $level = 1) {
    foreach ($array as $element) {
        if (is_array($element)) {

            print_tree($element, $level + 1);
        } else {
            if (is_object($element)) {
                print str_repeat('-', 6 * ($element->id_tree + 1)) . ">  " . $element->id .
                        " = " . $element->variable . " : " . $element->value . ""
                        . " (ya = " . $element->ya . ", tidak = " . $element->tidak . " ) " . $element->kelayakan . "<br>";
            }
        }
    }
}

function print_tree_prediksi($array, $level = 1) {
    foreach ($array as $element) {
        if (is_array($element)) {
            print_tree_prediksi($element, $level + 1);
        } else {
            if (is_object($element)) {
                print str_repeat('-', $element->id_parent) . ">  if  ( " .
                        $element->variable . " == " . $element->value . ") then " . $element->kelayakan . "<br>";
            }
        }
    }
}
