<?php
include "koneksi.php";

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$keterangan = $_POST['keterangan'];
$waktu = date('d');
echo $nama;

$cari = $konek->query("select*from absen where nama like '$nama' and waktu like '%$waktu%'");
$cek=$cari->num_rows;

if(empty($cek) ){
  $simpan = $konek->query("insert into absen (nama,kelas,keterangan) values ('$nama','$kelas','$keterangan')");
  ?>
  <script>
  document.location.href='absen.php?notif=berhasil';
</script>
<?php
}else{
?>
<script>
  document.location.href='absen.php';
</script>
<?php
}
?>
