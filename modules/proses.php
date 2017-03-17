<?php

$json_response;

$con = mysql_connect("localhost", "root", "");
$rs = mysql_select_db("db_data_mining_nila");

$param = $_POST['param'];
session_start();

if ($param == 'login') {
    $log = '';
    $json_response = array();
    define('INCLUDE_CHECK', 1);

    parse_str($_POST['data'], $data);

    $nama = htmlentities($data['user']);
    $pass = htmlentities($data['pass']);

    $result = mysql_query("SELECT username, id FROM karyawan WHERE username = '$nama' and password=md5('$pass')");
    $user_data = mysql_fetch_assoc($result);
    $data_ada = mysql_num_rows($result);

    if ($data_ada == 1) {
        $_SESSION['sess-username-datamining'] = $user_data['username'];
        $_SESSION['sess-id-datamining'] = $user_data['id'];
        $info['status'] = "true";
        $info['data'] = $user_data;
    } else {
        $info['status'] = "false";
    }

    echo json_encode($info);
} elseif ($param == 'getDataAnggota') {
    $result = mysql_query("select * from data_anggota");

    $i = 1;
    
    while ($dataResult = mysql_fetch_assoc($result)) {
        $temp['no'] = $i++;
       // $temp['id'] = $dataResult['id'];

        $resultLatih = mysql_query("select * from data_latih inner join data_value_variable on data_value_variable.id = data_latih.id_value where id_anggota = '" . $dataResult['id'] . "'");
        while ($dataLatih = mysql_fetch_assoc($resultLatih)) {
            $temp[$dataLatih['id']] = $dataLatih['nilai_variable'];
        }

        $resultDeskripsi = mysql_query("select * from data_deskripsi_value where id_anggota = '" . $dataResult['id'] . "'");
        while ($dataResul = mysql_fetch_assoc($resultDeskripsi)) {
            $temp[$dataResul['id']] = $dataResul['value'];
        }
        
        $temp['kelayakan'] = $dataResult['kelayakan'];

        $data[] = $temp;
    }

    $json_response = $data;

    echo json_encode($json_response);
} elseif ($param == 'getDataVariable') {
    $result = mysql_query("select * from data_variable");

    while ($datarow = mysql_fetch_assoc($result)) {
        $data[$datarow['id']] = $datarow;
        $result_datavalue = mysql_query("select * from data_value_variable where id_variable = '" . $datarow['id'] . "'");
        while ($datavalue = mysql_fetch_assoc($result_datavalue)) {
            $data[$datarow['id']]['value'][$datavalue['id']] = $datavalue;
        }
    }

    $json_response = $data;
    echo json_encode($json_response);
} elseif ($param == "getDataDeskripsi") {
    $result = mysql_query("select * from data_deskripsi");

    while ($row = mysql_fetch_assoc($result)) {
        $log[] = $row;
    }

    $json_response = $log;
    echo json_encode($json_response);
} elseif ($param == 'simpanDataAnggota') {
    parse_str($_POST['data'], $data);

    mysql_query('begin');

    $result = mysql_query("insert into data_anggota(no_pembiayaan, nama_anggota, kelayakan) values ('" . $data['no'] . "','" . $data['nama'] . "','" . $data['kelayakan'] . "')");
    $id = mysql_insert_id();
    if ($result) {
        mysql_query('commit');
        mysql_query('begin');

        foreach ($data['data'] as $value) {
            $result = mysql_query("insert into data_latih(id_anggota ,id_value) values ('" . $id . "','" . $value . "') ");

            if (!$result) {
                break;
            }
        }

        foreach ($data['deskripsi'] as $key => $value) {
            $result = mysql_query("insert into data_deskripsi_value(id_anggota ,id_deskripsi, value) values ('" . $id . "','" . $key . "','" . $value . "') ");

            if (!$result) {
                break;
            }
        }

        if ($result) {
            mysql_query('commit');
        } else {
            mysql_query('rollback');
            mysql_query("delete from data_anggota where id = '" . $id . "'");
        }
    } else {
        mysql_query('rollback');
    }

    $json_response['result'] = $result;

    echo json_encode($json_response);
} elseif ($param == 'deleteAllAnggota') {
    
} else {
    echo json_encode($data);
}