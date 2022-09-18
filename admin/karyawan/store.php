<?php
session_start();
require_once '../helper/connection.php';

$kode_karyawan = $_POST['kode_karyawan'];
$nama_karyawan = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$alamat = $_POST['alamat'];

$query = mysqli_query($connection, "insert into karyawan(kode_karyawan, nama_karyawan, jenkel_karyawan, alamat_karyawan) value('$kode_karyawan', '$nama_karyawan', '$jenkel', '$alamat')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }
