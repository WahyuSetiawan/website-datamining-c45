<?php

class runningAlgoritm {

    public $cotainer;
    public $db;
    public $parameter;

    function __construct($variable, $db, $probaColomn, $gain) {
        $this->db = $db;

        if (isset($gain)) {
            $keys = array_keys($gain);
            foreach ($keys as $key) {
                unset($variable[$key]);
            }

            $this->parameter = $this->generateParameter($gain);
        }

        $this->generate($variable, $probaColomn, $this->parameter);
    }
    
    // generate parameter filter yang digunakan untuk perhitungan

    public function generateParameter($array) {
        $keys = array_keys($array);
        $result = "";

        foreach ($keys as $key) {
            $result = $result . " and " . $key . " = '" . $array[$key] . "' ";
        }

        return $result;
    }
    
    // memlakukan generate varible yang digunakan sebagai tolak ukur dalam perhitungan

    public function generate($variable, $probaColomn, $parameter) {
        $keys = array_keys($variable);
        $probaColom = array_keys($probaColomn)[0];
        
        foreach ($keys as $key) {
            foreach ($variable[$key] as $colomn) {
                foreach ($probaColomn[$probaColom] as $proba) {
                    $this->cotainer[$key][$colomn][$proba] = $this->getCountColomnYN($key, $colomn, $probaColom, $proba, $parameter);
                }
            }
        }
    }
    
    // mendapatkan banyak ya dan tidak dalam database

    public function getCountColomnYN($colomn, $filter, $colomnYN, $yn, $parameter) {
        $result = mysql_query("select count(" . $colomn . ") "
                . "from " . $this->db . " "
                . "where " . $colomn . " = '" . $filter . "' "
                . "and " . $colomnYN . " = '" . $yn . "' " . $parameter) or exit(mysql_error());

        $data = mysql_fetch_row($result);
        
        return (int) $data[0];
    }
    
    // function untuk mendapatkan banyak jumlah dari colomn

    public function getCountColomn($colomn, $filter) {
        $result = mysql_query("select count(" . $colomn . ") "
                . "from " . $this->db . " "
                . "where " . $colomn . " = '" . $filter . "'");
        $data = mysql_fetch_row($result);

        return (int) $data[0];
    }

    // function untuk mendaatkan banya jumlrah colomn
    
    public function getCount($colomn) {
        $sql = "select count(" . $colomn . ") from " . $this->db;
        $result = mysql_query($sql) or die($sql . mysql_error());
        $data = mysql_fetch_row($result);

        return (int) $data[0];
    }
    
    // getter atau mendapatkan hasil yang sudah digenerate

    public function getCotainer() {
        return $this->cotainer;
    }

}
