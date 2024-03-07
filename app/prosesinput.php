<?php
include "koneksi.php";
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$telp = $_POST['telp'];
$jenis_kelamin = $_POST['jenis_kelamin'];

if($nama==""){
  echo "maaf nama wajib di isi";
}else{
$simpan = $konek->query("insert into siswa(nama,kelas,jurusan,telp,jenis_kelamin ) values ('$nama','$kelas','$jurusan','$telp','$jenis_kelamin')");
}
?>
<script>
  document.location.href='input.php';
</script>