<?php
define ('DB_USER', "root");
define ('DB_PASSWORD', "");
define ('DB_DATABASE', "crudeone");
define ('DB_HOST', "127.0.0.1");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("hhhhhh");
?>