<?php

class algoritm_c45 {

    public $database;
    public $entropy;
    public $sumEntropy;
    public $gain;
    public $result;
    public $tree;
    public $proba;
    public $countData;
    public $countProblem;
    public $entropysemesta;

    //constructor
    function __construct($database) {
        $this->database = $database;
        //var_dump($database);
        $this->algorit45($database);
    }

    //function
    public function algorit45($database) {
        $key = array_keys($database);

        $this->countData = self::countData($database);
        $this->countProblem = self::countProblem($database);
        
        foreach ($key as $value) {
            $this->entropy[$value] = self::entropyEntitas($database[$value]);
            $this->sumEntropy[$value] = self::entropyEntitasSum($database[$value]);
        }

        foreach ($key as $value) {
            $this->gain[$value] = self::gainEntity($database[$value], $this->entropy[$value], $this->sumEntropy[$value]);
        }
    }
    
    // perhitungan entropy

    public function entropyEntitas($proba) {
        $contain;
        $keys = array_keys($proba);

        foreach ($keys as $key) {
            $contain[$key] = self::entropy($proba[$key]);
        }

        return $contain;
    }

    //perhitungan jumlah entropy

    public function entropyEntitasSum($proba) {
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

    // perhitungan entropy
    public function entropy($dataset) {
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

    // perhitungan entity

    public function gainEntity($database, $entropy, $sumEntropyDatabase) {
        $sumEntity;
        $sumEntropy = 0;
        $keys = array_keys($database);

        foreach ($keys as $key) {
            $sumEntity[$key] = self::sum($database[$key]);
        }

        $sum = self::sum($sumEntity);
        if ($sum == 0) {
            $sum = 0;
        } else {
            foreach ($keys as $key) {
                if ($sumEntity[$key] != 0) {
                    $sumEntropy = $sumEntropy + (($sumEntity[$key] / $sum) * $entropy[$key]);
                } else {
                    $sumEntropy = $sumEntropy + 0;
                }
            }
            
            $sum = $sumEntropyDatabase - $sumEntropy;
        }


        return $sum;
    }

    // perhitungan jumlah data perentitas

    public function countData($dataset) {
        $keys = array_keys($dataset);

        foreach ($keys as $key) {
            $keys2 = array_keys($dataset[$key]);
            foreach ($keys2 as $key2) {
                $sum[$key][$key2] = self::sum($dataset[$key][$key2]);
            }
            //$sum = self::sum($data);
        }

        return $sum;
    }

    // perhitungan jumlah data periterasi

    public function countProblem($dataset) {
        $keys = array_keys($dataset);

        foreach ($keys as $key) {
            $keys2 = array_keys($dataset[$key]);
            $sum = 0;
            foreach ($keys2 as $key2) {
                $sum = self::sum($dataset[$key][$key2]) + $sum;
            }
            $sumReturn[$key] = $sum;
            //$sum = self::sum($data);
        }

        return $sumReturn;
    }

    // perhitunagan dasar total

    public function sum($array) {
        $sum = 0;
        foreach ($array as $value) {
            $sum = $sum + $value;
        }

        return $sum;
    }

    //getter and setter

    public function getDatabase() {
        return $this->database;
    }

    public function getEntropy() {
        return $this->entropy;
    }

    public function getSumEntropy() {
        return $this->sumEntropy;
    }

    public function getGain() {
        return $this->gain;
    }

    public function getResult() {
        return $this->result;
    }

    public function getTree() {
        return $this->tree;
    }

    public function getProba() {
        return $this->proba;
    }

    public function getMaxGain() {
        $max["value"] = max($this->gain);
        $max["id"] = array_search($max["value"], $this->gain);
        return $max;
    }

    public function getMaxEntropy($gain) {
        $max["value"] = max($this->entropy[$gain]);
        $max["id"] = array_search($max["value"], $this->entropy[$gain]);
        return $max;
    }

}
