<?php
$srvr="localhost"; //SESUAIKAN DENGAN WEBSERVER ANDA
$db="u1541084_scan"; //SESUAIKAN DENGAN WEBSERVER ANDA
$usr="u1541084_scan"; //SESUAIKAN DENGAN WEBSERVER ANDA
$pwd="scan@86";//SESUAIKAN DENGAN WEBSERVER ANDA

($GLOBALS["___mysqli_ston"] = mysqli_connect($srvr, $usr, $pwd));
mysqli_select_db($GLOBALS["___mysqli_ston"], $db);
?>