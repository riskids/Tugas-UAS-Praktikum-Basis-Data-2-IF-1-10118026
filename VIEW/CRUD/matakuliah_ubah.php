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

    <title>Ubah Matakuliah</title>
</head>

<body>

    <div class="container">
        <!-- form -->
        <!-- menggunakan griid system 1 row = 12 col -->
        <h2 class="alert alert-primary text-center mt-5">Ubah Matakuliah</h2>
        <?php
        if (isset($_GET["IdMatkul"])) {
            $db = dbConnect();
            $IdMatkul = $db->escape_string($_GET["IdMatkul"]);
            $dataruang = getDataMatakuliah($IdMatkul);
            if ($dataruang) {
        ?>
                <form action="matakuliah_simpan_ubah.php" method="post" name="frm">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="IdMatkul">Id Matakuliah</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="IdMatkul" id="IdMatkul" class="form-control" placeholder="masukan Id Matkul " value="<?php echo $dataruang["id_matakuliah"]; ?>" readonly>
                            </div>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="IdJurusan">Id Jurusan</label>
                            </div>
                            <div class="col-md-9">
                                <select name="IdJurusan" id="IdJurusan" class="form-control">
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
                                <select name="NIP" id="NIP" class="form-control">
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
                                <select name="NoRuang" id="NoRuang" class="form-control">
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
                                <input type="text" name="NamaMatkul" id="NamaMatkul" class="form-control" placeholder="masukan Nama Matkul" value="<?php echo $dataruang["nama_matakuliah"]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="SKS">SKS</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="SKS" id="SKS" class="form-control" placeholder="masukan SKS" value="<?php echo $dataruang["sks"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="Semester">Semester</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="Semester" id="Semester" class="form-control" placeholder="masukan Semester" value="<?php echo $dataruang["semester"]; ?>">
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