<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = $konek->query("delete from absen where no ='$id'");

?>

<script>
  document.location.href='data_absen.php';
</script>