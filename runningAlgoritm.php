<?php

class runningAlgoritm {

    static $cotainer;
    static $db;

    function __construct($variable, $db, $probaColomn) {
        self::$db = $db;
        $this->generate($variable, $probaColomn);
    }

    static function generate($variable, $probaColomn) {
        $keys = array_keys($variable);
        $probaColom = array_keys($probaColomn)[0];

        foreach ($keys as $key) {
            foreach ($variable[$key] as $colomn) {
                foreach ($probaColomn[$probaColom] as $proba){
                    self::$cotainer[$key][$colomn][$proba] = self::getCountColomnYN($key, $colomn, $probaColom, $proba);
                }
            }
        }
    }

    static function getCountColomnYN($colomn, $filter, $colomnYN, $yn) {
        $result = mysql_query("select count(" . $colomn . ") "
                . "from " . self::$db . " "
                . "where " . $colomn . " = '" . $filter . "' "
                . "and " . $colomnYN . " = '" . $yn . "' ");
        $data = mysql_fetch_row($result);

        return (int) $data[0];
    }

    static function getCountColomn($colomn, $filter) {
        $result = mysql_query("select count(" . $colomn . ") "
                . "from " . self::$db . " "
                . "where " . $colomn . " = '" . $filter . "'");
        $data = mysql_fetch_row($result);

        return (int) $data[0];
    }

    static function getCount($colomn) {
        $sql = "select count(" . $colomn . ") from " . self::$db;
        $result = mysql_query($sql) or die($sql . mysql_error());
        $data = mysql_fetch_row($result);

        return (int) $data[0];
    }

    static function getCotainer() {
        return self::$cotainer;
    }

}
