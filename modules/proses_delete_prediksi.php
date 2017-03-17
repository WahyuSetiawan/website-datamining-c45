<script>
    window.location.href = 'tampil_testing.php?page=prediksi';
</script>

<?php
include './koneksi.php';

mysql_query("delete from data_prediksi where id = '" . $_GET['id'] . "'");


