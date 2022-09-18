<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$kode_ket = $_GET['kode_ket'];
$query = mysqli_query($connection, "SELECT * FROM keterangan WHERE kode_ket='$kode_ket'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Keterangan</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <input type="hidden" name="kode_ket" value="<?= $row['kode_ket'] ?>">
              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Nama Kategori Keterangan</td>
                  <td><input class="form-control" type="text" name="keterangan" value="<?= $row['keterangan'] ?>"></td>
                </tr>
                <tr>
                  <td>
                    <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  </td>
                </tr>
              </table>

            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>