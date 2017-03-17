    <?php
    include './koneksi.php';
    $tree['text']['name'] = 'Pohon Keputusan';
    $tree['children'] = mencarikakinode('0');

    function mencarikakinode($index) {
        $i = 0;
        $hasil = mysql_query("select * from tampil_rule_prediksi where id_parent = '" . $index . "'");
        while ($data = mysql_fetch_assoc($hasil)) {

            $temp[$i]['text']['name'] = $data['variable'];
            $temp[$i]['text']['desc'] = $data['value'];
            if ($data['kelayakan'] == '?') {
                $temp[$i]['children'] = mencarikakinode($data['id']);
            }
            $i++;
        }

        return $temp;
    }

    echo json_encode($tree);
    