<?php
include "boot.php";
include "koneksi.php";
?>

  <div class="container mt-2">
    <form class ="form-control mt-3 bg-success text-light" action="prosesinput.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
  </div>
  <label for="exampleInputEmail1" class="form-label">kelas:</label>
    <select name="kelas" id="" class="form-control">
   <?php
$kar=$konek->query("select kelas from kelas");
while($row = $kar->fetch_array()) {
?>
    <option >
  <?=$row['kelas']?> 
    </option>

    <?php
}
    ?>
   </select>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">jurusan:</label>
    <select name="jurusan" id="" class="form-control">
   <?php
$kar=$konek->query("select jurusan from jurusan");
while($row = $kar->fetch_array()) {
?>
    <option >
  <?=$row['jurusan']?> 
    </option>

    <?php
}
    ?>
   </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">telp:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telp" required>
  </div>
  
    

    <label for="exampleInputEmail1" class="form-label">jenis_kelamin</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" >
  <label class="form-check-label" for="flexRadioDefault1">
   Laki-laki
  </label> 
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
  <label class="form-check-label" for="flexRadioDefault2">
   Perempuan
  </label>
</div>


    <div class="text-end">
  <button type="submit" class="btn btn-primary mt-3">Save</button>
  </div>
</form>
</div>

