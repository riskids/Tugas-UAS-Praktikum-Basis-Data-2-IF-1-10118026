<!doctype html>
<html lang="en">
<?php
include_once("DAO/function.php");
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hapus Matakuliah</title>
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
        <!-- form -->
        <!-- menggunakan griid system 1 row = 12 col -->
        <h2 class="alert alert-primary text-center mt-5">Hapus Matakuliah</h2>
        <?php
        if (isset($_GET["IdMatkul"])) {
            $db = dbConnect();
            $IdMatkul = $db->escape_string($_GET["IdMatkul"]);
            $dataruang = getDataMatakuliah($IdMatkul);
            if ($dataruang) {


        ?>
                <form action="matakuliah_simpan_hapus.php" method="post" name="frm">
                <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="IdMatkul">Id Matakuliah</label>
                            </div>
                            <div class="col-md-9">
                                <input type="hidden" name="IdMatkul" id="IdMatkul" class="form-control" placeholder="masukan Id Matkul " value="<?php echo $dataruang["id_matakuliah"]; ?>" readonly>
                                <?php echo $dataruang["id_matakuliah"]; ?>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="IdJurusan">Id Jurusan</label>
                            </div>
                            <div class="col-md-9">
                                <select name="IdJurusan" id="IdJurusan" class="form-control" disabled>
                                    <option value="">Pilih Jurusan</option>

                                    <?php
                                    $data = getListJurusan();
                                    foreach ($data as $barisdata) {                                        
                                        echo "<option value=\"" . $barisdata["id_jurusan"] . "\" " . ($barisdata["id_jurusan"]==$dataruang["id_jurusan"]?"selected":"") .">". $barisdata["id_jurusan"] . "</option>\n";
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="NIP">NIP</label>
                            </div>
                            <div class="col-md-9">
                                <select name="NIP" id="NIP" class="form-control" disabled>
                                    <option value="">Pilih NIP</option>

                                    <?php
                                    $data = getListDosen();
                                    foreach ($data as $barisdata) {
                                        
                                        echo "<option value=\"" . $barisdata["nip"] . "\" " . ($barisdata["nip"]==$dataruang["nip"]?"selected":"") .">". $barisdata["nip"] . "</option>\n";
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="NoRuang">NoRuang</label>
                            </div>
                            <div class="col-md-9">
                                <select name="NoRuang" id="NoRuang" class="form-control" disabled>
                                    <option value="">Pilih No Ruang</option>

                                    <?php
                                    $data = getListRuangan();
                                    foreach ($data as $barisdata) {
                                        
                                        echo "<option value=\"" . $barisdata["no_ruangan"] . "\" " . ($barisdata["no_ruangan"]==$dataruang["no_ruangan"]?"selected":"") .">". $barisdata["no_ruangan"] . "</option>\n";
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="NamaMatkul">Nama Matkul</label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["nama_matakuliah"]; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="SKS">SKS</label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["sks"]; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="Semester">Semester</label>
                            </div>
                            <div class="col-md-9">
                                <?php echo $dataruang["semester"]; ?>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary" name="TblUpdate">Simpan</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>

                </form>
        <?php
            } else
                echo "Data tidak ditemukan";
        } else
            echo "Data Tidak ada";
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>