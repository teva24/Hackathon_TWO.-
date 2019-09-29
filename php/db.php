<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Vadim');
define('DB_DATABASE', 'EVE');
 $connection = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 $base_url='http://www.youwebsite.com/email_activation/';
?>