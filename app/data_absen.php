<?php
include "boot.php";
include "koneksi.php";
$risma = isset ($_GET['ris']) ? $_GET['ris'] : '';
$Tampil = "SELECT*FROM absen WHERE nama LIKE '%$risma%'";
$result = $konek->query ($Tampil)
?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">kelas</th>
      <th scope="col">keterangan</th>
      <th scope="col">waktu</th>      
      <th scope="col">aksi</th>      
      
    </tr>
  </thead>
  <tbody>
  <?php
  $tampil = $konek->query("select*from absen");
  while ($s = $tampil->fetch_array()){
  @$no++;

    ?>
    <tr>
        <th scape="row"><?=$no;?></th>
        <td><?= $s['nama']?></td>
        <td><?= $s['kelas']?></td>
        <td><?= $s['keterangan']?></td>
        <td><?= $s['waktu']?></td>
        <td>
          <button class="btn btn-danger" onclick="confirmDelete(<?= $s['no'] ?>)"><i class="bi bi-trash"></i></button>
          <button class="btn btn-success" onclick="document.location.href='update_absen.php?id=<?= $s['no'] ?>'"><i class="bi bi-pencil-square"></i></button>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<script>
  function confirmDelete(id) {
    var confirmation = confirm("Apakah anda ingin menghapus ini?");
    if (confirmation) {
      document.location = 'hapus_absen.php?id=' + id;
    }
  }
</script>
