<?php
$servername = "localhost"; //SESUAIKAN DENGAN WEBSERVER ANDA
$db = "absensi"; //SESUAIKAN DENGAN WEBSERVER ANDA
$username = "root"; //SESUAIKAN DENGAN WEBSERVER ANDA
$password = ""; //SESUAIKAN DENGAN WEBSERVER ANDA

($GLOBALS["___mysqli_ston"] = mysqli_connect($servername, $username, $password));
mysqli_select_db($GLOBALS["___mysqli_ston"], $db);
