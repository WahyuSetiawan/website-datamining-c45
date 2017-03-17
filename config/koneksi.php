<?php

if (session_status() == 1) {
    session_start();
}

if (!$_SESSION['admin']) {
    header('Location: login');
} else {
    $database = 'db_data_mining_nila';
    $password = '';
    $username = 'root';
    $host = 'localhost';

    $sql = mysql_connect($host, $username, $password) or exit(mysql_error());
    $databaseSql = mysql_select_db($database, $sql) or exit(mysql_error());
}
