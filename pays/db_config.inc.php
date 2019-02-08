<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

$host	= "localhost";
$user	= "www";
$pass	= "www";
$base	= "aerte";

$database = mysql_connect($host, $user, $pass) or DIE("Unable to connect SQL !");
mysql_select_db($base,$database) or DIE("Unable to connect SQL !");
mysql_query("SET CHARACTER SET utf8");

/*
$host	= "localhost";
$user	= "admin_aerte";
$pass	= "13a_aerte";
$base	= "aerte2";

/* $host	= "localhost";
$user	= "root";
$pass	= "";
$base	= "aertev2"; */

error_reporting(0);

?>
