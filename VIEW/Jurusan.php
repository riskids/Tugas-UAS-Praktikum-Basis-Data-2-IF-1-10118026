<!doctype html>
<html lang="en">
<?php
    include_once("CRUD/DAO/function.php");
    ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/bootstrap.min.js"></script>
  <title>Data jurusan</title>
</head>

<body>
<nav class="navbar navbar-expand-lg  navbar-light bg-primary fixed-top">
		<div class="container">
			<a class="navbar-brand text-white" href="#">SISTEM AKADEMIK MAHASISWA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-white " href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<!-- Disable -->
					<!-- <li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Data
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="Dosen.php">Dosen</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="Mahasiswa.php">Mahasiswa</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="Matakuliah.php">Matakuliah</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="Fakultas.php">Fakultas</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="Jurusan.php">Jurusan</a>
							<div class="dropdown-divider"></div>
							
							<a class="dropdown-item" href="Ruangan.php">Ruangan</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="Nilai.php">Nilai</a>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
  <div class="container">
    <h2 class="text-center m-3">Data jurusan</h2>
    <a class="btn btn-warning" href="../index.php" role="button">Kembali</a>
    <form class="form-inline" method="GET" action="CRUD/jurusan_cari.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Cari Data</button>
      <a class="btn btn-primary m-3" href="CRUD/jurusan_tambah.php" role="button">Tambah Data</a>
    </form>
    <!-- INCLUDE -->
    <?php    
    $db = dbConnect();
    if ($db->connect_errno == 0) {
      $sql = "SELECT * FROM  jurusan ";
      $res = $db->query($sql);
      if ($res) {
    ?>
        <!-- END -->
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Id Jurusan</th>
              <th scope="col">Id Fakultas</th>
              <th scope="col">Nama jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <!-- INCLUDE -->
          <?php
          $data = $res->fetch_all(MYSQLI_ASSOC);
          foreach ($data as $barisdata) {
          ?>
            <!-- END -->
            <tbody>
              <tr>
                <td scope="row"><?php echo $barisdata["id_jurusan"]; ?></td>
                <td><?php echo $barisdata["id_fakultas"]; ?></td>
                <td><?php echo $barisdata["nama_jurusan"]; ?></td>
                <td>
                <a class="btn btn-danger" href="CRUD/jurusan_hapus.php?IdJurusan=<?php echo $barisdata["id_jurusan"];?>" role="button">Hapus</a>
                  <a class="btn btn-success" href="CRUD/jurusan_ubah.php?IdJurusan=<?php echo $barisdata["id_jurusan"];?>" role="button">Ubah</a>
                </td>
                <!-- INCLUDE -->
              <?php
            }
              ?>
              <!-- END -->
              </tr>
            </tbody>
        </table>
    <?php
      } else
        echo "Error : " . $db->error . "<br>";
    } else
      echo "Error";
    ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>