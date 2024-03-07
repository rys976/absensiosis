<?php
include "boot.php";
include "koneksi.php";


if (isset($_POST['hapus'])) {
    $id = $_POST['id_hapus'];
    $hapus = $konek->query("DELETE FROM siswa WHERE no='$id'");
    if ($hapus) {
        echo "<script>alert('Data berhasil dihapus');document.location.href='hapus.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');document.location.href='update.php';</script>";
    }
}


if (isset($_POST['edit'])) {
    $id = $_POST['id_edit'];
   
    header("Location: update.php?id=$id");
}


$search_query = $_GET['ris'];
$result = $konek->query("SELECT * FROM siswa WHERE nama LIKE '%$search_query%' OR kelas LIKE '%$search_query%' OR jurusan LIKE '%$search_query%' OR jenis_kelamin LIKE '%$search_query%'");


echo "<h2>Search results for: " . htmlspecialchars($search_query) . "</h2>";
echo "<table class='table'>";
echo "<th>no</th>";
echo "<th>nama</th>";
echo "<th>kelas</th>";
echo "<th>jurusan</th>";
echo "<th>jenis_kelamin</th>";
echo "<th>aksi</th>";

$no = 0;
while ($row = $result->fetch_assoc()) {
    $no++;
    echo "<tr>";
    echo "<th scope='row'>$no</th>";
    echo "<td>{$row['nama']}</td>";
    echo "<td>{$row['kelas']}</td>";
    echo "<td>{$row['jurusan']}</td>";
    echo "<td>{$row['jenis_kelamin']}</td>";
    ?>
    <td>
        <form method="post" style="display: inline-block;">
            <input type="hidden" name="id_hapus" value="<?= $row['no'] ?>">
            <button type="submit" class="btn btn-danger" name="hapus"><i class="bi bi-trash"></i></button>
        </form>
        <form method="post" style="display: inline-block;">
            <input type="hidden" name="id_edit" value="<?= $row['no'] ?>">
            <button type="submit" class="btn btn-success" name="edit"><i class="bi bi-pencil-square"></i></button>
        </form>
    </td>
    <?php
    echo "</tr>";
}
echo "</table>";
?>
