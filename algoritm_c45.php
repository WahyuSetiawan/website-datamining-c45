<?php

class algoritm_c45 {

    static $database;
    static $entropy;
    static $sumEntropy;
    static $gain;
    static $result;
    static $tree;
    static $proba;

    //constructor
    function __construct($database) {
        self::$database = $database;
        //var_dump($database);
        self::algorit45($database);
    }

    //function
    static function algorit45($database) {
        $key = array_keys($database);

        foreach ($key as $value) {
            self::$entropy[$value] = self::entropyEntitas($database[$value]);
            self::$sumEntropy[$value] = self::entropyEntitasSum($database[$value]);
        }

        foreach ($key as $value) {
            self::$gain[$value] = self::gainEntity($database[$value],self::$entropy[$value],  self::$sumEntropy[$value]);
        }
        
        var_dump(self::$gain);
    }

    static function entropyEntitas($proba) {
        $contain;
        $keys = array_keys($proba);

        foreach ($keys as $key) {
            $contain[$key] = self::entropy($proba[$key]);
        }

        return $contain;
    }

    static function entropyEntitasSum($proba) {
        $sumProba;
        $keys = array_keys($proba);
        $keys = array_keys($proba[$keys[0]]);
        
        foreach ($keys as $key) {
            $sumProba[$key] = 0;
            foreach ($proba as $prob) {
                $sumProba[$key] = $sumProba[$key] + $prob[$key];
            }
        }
        
        return self::entropy($sumProba);
    }

    static function entropy($dataset) {
        $sum = self::sum($dataset);
        $keys = array_keys($dataset);
        $entropy = 0;

        foreach ($keys as $key) {
            if ($dataset[$key] == 0 || $sum == 0) {
                $entropy = $entropy + 0;
            } else {
                $entropy = (-($dataset[$key] / $sum)) * log($dataset[$key] / $sum, 2) + $entropy;
            }
        }

        return $entropy;
    }

    static function gainEntity($database,$entropy,$sumEntropyDatabase) {
        $sumEntity ;
        $sumEntropy = 0;
        $keys = array_keys($database);
        
        foreach ($keys as $key){
            $sumEntity[$key] = self::sum($database[$key]);
        }
        
        $sum = self::sum($sumEntity);
        
        foreach ($keys as $key){
            $sumEntropy = $sumEntropy + (($sumEntity[$key]/$sum) * $entropy[$key]);
        }
        
        return $sumEntropyDatabase - $sumEntropy; 
    }

    static function gain($entropy) {
        
    }

    static function sumEntropy($entropy) {
        
    }

    static function sum($array) {
        $sum = 0;
        foreach ($array as $value) {
            $sum = $sum + $value;
        }

        return $sum;
    }

    //getter and setter
}
