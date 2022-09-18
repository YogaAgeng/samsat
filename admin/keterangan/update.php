<?php
session_start();
require_once '../helper/connection.php';

$kode_ket = $_POST['kode_ket'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($connection, "UPDATE keterangan SET keterangan = '$keterangan' WHERE kode_ket='$kode_ket'");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}
