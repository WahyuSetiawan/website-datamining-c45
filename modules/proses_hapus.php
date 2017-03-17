<script>
    document.location.href = 'tampil_setting.php?page=';
</script>

<?php
include './koneksi.php';

mysql_query("delete from karyawan where id = '" . $_GET['id'] . "'");
