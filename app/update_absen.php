<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $konek->query("select * from absen where no ='$id'");
$a = $panggil->fetch_array();

if (isset($_POST['edit'])) {
    $update_absen = $konek->query("update absen set nama='$_POST[nama]', kelas='$_POST[kelas]', keterangan='$_POST[keterangan]' where no='$id'");
    if ($update_absen) {
        header("Location: data_absen.php");
    } else {
        echo "Gagal mengedit data.";
    }

    
if (isset($_SESSION['message'])) {
?>
  <div class="alert alert-success" role="alert">
    <?= $_SESSION['message'] ?>
  </div>
<?php
unset($_SESSION['message']);
}

}
?>
<div class="container mt-2">
    <form class="form-control mt-3 bg-success text-light" action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $a['nama'] ?>">
        </div>
        <label for="exampleInputEmail1" class="form-label">Kelas :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kelas" value="<?= $a['kelas'] ?>">
        </label>

        <label for="exampleInputEmail1" class="form-label">Keterangan :</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="keterangan" value="hadir" <?= ($a['keterangan'] == 'hadir') ? 'checked' : '' ?>>
            <label class="form-check-label" for="flexRadioDefault1">
                Hadir
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="keterangan" value="sakit" <?= ($a['keterangan'] == 'sakit') ? 'checked' : '' ?>>
            <label class="form-check-label" for="flexRadioDefault2">
                Sakit
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="keterangan" value="izin" <?= ($a['keterangan'] == 'izin') ? 'checked' : '' ?>>
            <label class="form-check-label" for="flexRadioDefault2">
                Izin
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="keterangan" value="alpa" <?= ($a['keterangan'] == 'alpa') ? 'checked' : '' ?>>
            <label class="form-check-label" for="flexRadioDefault2">
                Alpa
            </label>
        </div>

        <div class="text-end">
            <button name="edit" type="submit" class="btn btn-primary mt-3">Simpan</button>
        </div>

    </form>
</div>
