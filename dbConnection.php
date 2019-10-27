<?php
define ('DB_USER','4003497_zw91539');
define('DB_PASSWORD','REWvoJs6');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db10');



$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

?>