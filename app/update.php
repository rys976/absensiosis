<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $konek->query("select * from siswa where no ='$id'");
$a = $panggil->fetch_array();

if (isset($_POST['edit'])) {
    $update = $konek->query("update siswa set nama='$_POST[nama]', kelas= '$_POST[kelas]', jurusan='$_POST[jurusan]', telp='$_POST[telp]', jenis_kelamin='$_POST[jenis_kelamin]' where no='$id'");
    if ($update) {
        header("Location: tampil.php?id=$id");
        exit();
    } else {
        echo "Gagal mengedit data.";
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
        <label for="exampleInputEmail1" class="form-label">Jurusan :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jurusan" value="<?= $a['jurusan'] ?>">
        </label>
        <label for="exampleInputEmail1" class="form-label">Telp :</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telp" value="<?= $a['telp'] ?>">
        </label>
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin :</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($a['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>>
            <label class="form-check-label" for="flexRadioDisabled">
                Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?= ($a['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>>
            <label class="form-check-label" for="flexRadioCheckedDisabled">
                Perempuan
            </label>
        </div>

        <div class="text-end">
            <button name="edit" type="submit" class="btn btn-primary mt-3">Simpan</button>
        </div>

    </form>
</div>

<?php
if (isset($_POST['edit'])) {
    echo "data berhasil diubah <a href='tampil.php?id=$id'>kembali</a>";
}
?>
