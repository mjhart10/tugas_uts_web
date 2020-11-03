<?php
include_once "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <link rel="stylesheet" href="mycss.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

<?php
    //buat sql
    $strSQL = "SELECT * FROM pendidikan";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">

        <a class="navbar-brand" href="#">Home</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About ME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="education.php">Education</a>
                </li>

            </ul>

        </div>
    </nav>

    <div class="text4">
                <h1 class="display-4">Pendidikan</h1>
            </div><br>

    <div class="container">
        <div class="row">

            


            <div class="col">
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="gambar/sekoladasar.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Sekolah Dasar (SD)</h4>
                        <p class="card-text"><?php echo $row['sd'] ?></p>
                    </div>
                </div>
            </div>
            <br>

            <div class="col">
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="gambar/smp.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Sekolah Menengah Pertama (SMP)</h4>
                        <p class="card-text"><?php echo $row['smp'] ?></p>
                    </div>
                </div>
            </div>
            <br>

            <div class="col">
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="gambar/smk.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Sekolah Menengah Kejuruan (SMK)</h4>
                        <p class="card-text"><?php echo $row['smk'] ?></p>
                    </div>
                </div>
            </div>
            <br>

            <div class="col">
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="gambar/upj.jpeg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">UPJ</h4>
                        <p class="card-text"> <?php echo $row['kuliah'] ?> </p>
                    </div>
                </div>
            </div>
            <br>

        </div>
    </div>
    <br>
    <br>

    <?php
      }
    }
    ?>

    <div class="jumbotron text-center bg-dark" style="margin-bottom:0">
        <p>Footer</p>
        <p style="color:white">Copyright Website By Muhmmad Juliansyah | informtika 2020</p>
    </div>
    </div>

</body>

</html>