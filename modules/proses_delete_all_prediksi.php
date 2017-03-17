<?php

include './koneksi.php';

mysql_query("delete from data_prediksi where tampil = 0") or exit(mysql_error());

?>

<script>window.location = "tampil_testing.php"</script>