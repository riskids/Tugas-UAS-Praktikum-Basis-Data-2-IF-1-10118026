<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Simpan Data Ruangan</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center m-3">Simpan Data Ubah Ruangan Berhasil</h2>

        <?php
        include_once("DAO/function.php");
        $db = dbConnect();
        if ($db->connect_errno == 0) {
            $NoRuang   = $db->escape_string($_POST["NoRuang"]);
            $Kapasitas = $db->escape_string($_POST["Kapasitas"]);


            $sql =   $sql = "UPDATE ruangan
            SET 
            kapasitas='$Kapasitas'        
            WHERE no_ruangan='$NoRuang'";
            //echo $sql;
            $res = $db->query($sql);
            if ($res) {
                if ($db->affected_rows > 0) {
        ?>
                <div class="text-center">
                    <a href="../Ruangan.php"><button class="btn btn-primary">Go</button></a>
                    </div>
                <?php
                } else {
                ?>
                    Peyimpanan Data Gagal <br>
                    <a href="javascript:history.back();"><button>Kembali</button></a>
        <?php
                }
            } else
                echo "Error Query : " . $db->error . "<br>";
        } else
            echo "Error : " . $db->conncet_errno . "<br>";
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>