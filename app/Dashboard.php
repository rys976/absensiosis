<?php
include "boot.php";
$date = date("Y-m-d");
echo "<h3>PERMINGGU</h3>";
echo " ".$date;

include "koneksi.php";

function hitungJumlah($konek, $status, $date) {
    $lihat = $konek->query("select keterangan from absen where keterangan like '$status' and waktu like '%$date%'");
    return $lihat->num_rows;
}

?>

<div class="row">
<div class="col">
<div class="card" style="width: 10rem;">
  <img src="../images/o.png" class="card-img-top" alt="..." width="200">
  <div class="card-body bg-primary">
    <p class="card-text">Hadir
        <?php
        echo hitungJumlah($konek, 'Hadir', $date);
        ?>
    </p>
  </div>
</div>
</div>

<div class="col">
<div class="card mb-4" style="width: 10rem;">
  <img src="../images/sad.png" class="card-img-top" alt="..."  width="200">
  <div class="card-body bg-warning">
    <p class="card-text">Sakit 
    <?php
        echo hitungJumlah($konek, 'Sakit', $date);
        ?>
    </p>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col">
<div class="card mb-4" style="width: 10rem;">
  <img src="../images/p.png" class="card-img-top" alt="..."  width="200">
  <div class="card-body bg-success">
    <p class="card-text">Izin 
    <?php
        echo hitungJumlah($konek, 'Izin', $date);
        ?>
    </p>
  </div>
</div>
</div>

<div class="col">
<div class="card mb-4" style="width: 10rem;">
  <img src="../images/sw.png" class="card-img-top" alt="..."  width="200">
  <div class="card-body bg-danger">
    <p class="card-text">Alpa 
    <?php
        echo hitungJumlah($konek, 'Alpa', $date);
        ?>
    </p>
  </div>
</div>
</div>
</div>
