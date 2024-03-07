<?php
include "boot.php";
include "koneksi.php";
$risma = isset ($_GET['ris']) ? $_GET['ris'] : '';
$Tampil = "SELECT*FROM siswa WHERE nama LIKE '%$risma%'";
$result = $konek->query ($Tampil)
?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">kelas</th>
            <th scope="col">jurusan</th>
            <th scope="col">telp</th>
            <th scope="col">jenis_kelamin</th>
            <th scope="col">waktu</th>
            <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $tampil = $konek->query("select*from siswa");
  while ($s = $tampil->fetch_array()){
  @$no++;

    ?>
    <tr>
    <th scope="row"><?= $no; ?></th>
                <td><?= $s['nama'] ?></td>
                <td><?= $s['kelas'] ?></td>
                <td><?= $s['jurusan'] ?></td>
                <td><?= $s['telp'] ?></td>
                <td><?= $s['jenis_kelamin'] ?></td>
                <td><?= $s['waktu'] ?></td>
        <td>
          <button class="btn btn-danger" onclick="confirmDelete(<?= $s['no'] ?>)"><i class="bi bi-trash"></i></button>
          <button class="btn btn-success" onclick="document.location.href='update.php?id=<?= $s['no'] ?>'"><i class="bi bi-pencil-square"></i></button>
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
      document.location = 'hapus.php?id=' + id;
    }
  }
</script>
