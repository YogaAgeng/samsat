<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';


$karyawan = mysqli_query($connection, "SELECT COUNT(*) FROM karyawan");

$total_karyawan = mysqli_fetch_array($karyawan)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total karyawan</h4>
            </div>
            <div class="card-body">
              <?= $total_karyawan ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>