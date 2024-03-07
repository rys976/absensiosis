<button class="btn " onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 text-warning"></i></button>

<form action="" method="POST" class="form-control">
  Tanggal Awal : <input type="date" name="tgl1" class="form-control">
  Tanggal Akhir : <input type="date" name="tgl2" class="form-control">
  <div class="text-end">
    <input type="button" class="btn btn-primary mt-2" onclick="this.form.submit()" value="Submit">
  </div>
</form>

<div id="div1">
  <?php
  include "boot.php";
  include "koneksi.php";
  $date = date("d-m-y");

  echo $date;
  $risma = isset($_GET['ris']) ? $_GET['ris'] : '';
  $Tampil = "SELECT * FROM absen WHERE nama LIKE '%$risma%'";
  $result = $konek->query($Tampil);
  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">no</th>
        <th scope="col">nama</th>
        <th scope="col">kelas</th>
        <th scope="col">keterangan</th>
        <th scope="col">waktu</th>
      </tr>
    </thead>
    <tbody>
      <?php
      @$tampil = $konek->query("SELECT * FROM absen WHERE waktu BETWEEN '$_POST[tgl1]' AND '$_POST[tgl2]'");
      while ($s = $tampil->fetch_array()){
        @$no++;
      ?>
      <tr>
        <th scope="row"><?=$no;?></th>
        <td><?= $s['nama']?></td>
        <td><?= $s['kelas']?></td>
        <td><?= $s['keterangan']?></td>
        <td><?= $s['waktu']?></td>
        <td></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<script>
  function printDiv(el){
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;
    document.body.innerHTML = b;
    window.print();
    document.body.innerHTML = a;
  }
</script>
