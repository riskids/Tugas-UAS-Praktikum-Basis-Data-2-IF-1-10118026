<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <!-- form -->
        <!-- menggunakan griid system 1 row = 12 col -->
        <h2 class="alert alert-primary text-center mt-5">Tambah Ruangan</h2>
        <form action="ruangan_simpan_tambah.php" method="post" name="frm">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label for="noruang">No Ruangan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="NoRuang" id="noruang" class="form-control" placeholder="masukan No ruangan">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-3">
                        <label for="kapasitas">Kapasitas</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="Kapasitas" id="kapasitas" class="form-control" placeholder="masukan kapasitas">
                </div>
            </div>

            <div class="form-group">
                <div class="row mt-3">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary" name="TblSimpan">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>