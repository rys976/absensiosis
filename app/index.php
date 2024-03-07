<?php
session_start();
$user = $_SESSION['user'];

if ($user == "") {
  ?>
  <script>
    document.location = '../index.php';
    </script>
    <?php
}else{
  include "boot.php";
  ?>

    <div class="container">
    <!-- ini bagian navbar -->
    <nav class="navbar navbar-expand-lg bg-success mt-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Absensi OSIS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      </ul>
      <form class="d-flex" action="search.php" method="GET" target ="wadah">
        <input class="form-control me-2" type="search" placeholder="Search" name ="ris" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Oke</button>
      </form>
    </div>
  </div>
</nav>
<!-- ini penutup navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="row">
    <div class="col col-3 mt-2">
    <ul class="list-group">
    <a href="Dashboard.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-house-door-fill"></i>Dashboard</li>
  </a>
  <a href="absen.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-clipboard2-check-fill"></i>Absen</li>

  <a href="data_absen.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-people-fill"></i>Data Absen</li>
  </a>

  </a>
      <a href="input.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-person-lines-fill"></i>Input Data Siswa</li>
  </a>
  <a href="tampil.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-people-fill"></i>Data siswa</li>
  </a>
 
  <a href="rekap.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-book-fill"></i>Rekap</li>
  </a>
  <a href="logout.php"> 
  <li class="list-group-item"><i class="bi bi-box-arrow-right"></i>Log out</li>
</a>
</ul>
</div>
<div class="col mt-2">
  <iframe src="Dashboard.php" name="wadah" frameborder="0" width=100% height=800></iframe>
</div>
</div>
    </div>
  </body>

<?php
}
?>