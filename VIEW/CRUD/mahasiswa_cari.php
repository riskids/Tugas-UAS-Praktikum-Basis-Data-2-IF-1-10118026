<!doctype html>
<html lang="en">
<?php
include_once("DAO/function.php");
$db = dbConnect();
$cari = $db->escape_string($_GET["cari"]);
$sql = "SELECT * FROM mahasiswa where nim LIKE '%$cari%'";
$res = $db->query($sql);
$data = $res->fetch_all(MYSQLI_ASSOC);
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Data Cari Mahasiswa</title>
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
							<a class="dropdown-item" href="VIEW/Dosen.php">Dosen</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="VIEW/Mahasiswa.php">Mahasiswa</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="VIEW/Matakuliah.php">Matakuliah</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="VIEW/Fakultas.php">Fakultas</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="VIEW/Jurusan.php">Jurusan</a>
							<div class="dropdown-divider"></div>
							
							<a class="dropdown-item" href="VIEW/Ruangan.php">Ruangan</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="VIEW/Nilai.php">Nilai</a>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
  <div class="container">
    <h2 class="text-center m-3">Data Cari Mahasiswa</h2>
    <!-- INCLUDE -->
    <!-- END -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">NIP</th>
          <th scope="col">Nama</th>
          <th scope="col">TTL</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">No Telp</th>
          <th scope="col">Alamat</th>
          <th scope="col">Id Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <!-- INCLUDE -->
      <?php
      foreach ($data as $barisdata) {
      ?>
        <!-- END -->
        <tbody>
          <tr>
          <td scope="row"><?php echo $barisdata["nim"]; ?></td>
                <td scope="row"><?php echo $barisdata["nama"]; ?></td>
                <td scope="row"><?php echo $barisdata["ttl"]; ?></td>
                <td scope="row"><?php echo $barisdata["jk"]; ?></td>
                <td scope="row"><?php echo $barisdata["no_tlp"]; ?></td>
                <td scope="row"><?php echo $barisdata["alamat"]; ?></td> 
                <td scope="row"><?php echo $barisdata["id_jurusan"]; ?></td> 
          </tr>
            
            <td>
            <a class="btn btn-danger" href="mahasiswa_hapus.php?NIM=<?php echo $barisdata["nim"]; ?>" role="button">Hapus</a>
                  <a class="btn btn-success" href="mahasiswa_ubah.php?NIM=<?php echo $barisdata["nim"]; ?>" role="button">Ubah</a>
            </td>
            <!-- INCLUDE -->
          <?php
        }
          ?>
          <!-- END -->
          </tr>
        </tbody>
    </table>
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