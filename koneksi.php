<?php
$database = 'db_ardun_data_mining';
$password = '';
$username = 'root';
$host = 'localhost';

$sql = mysql_connect($host, $username, $password) or exit(mysql_error());
$databaseSql = mysql_select_db($database,$sql) or exit(mysql_error());