
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="home.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php 
    $status = 2;
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php"; 
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $umur = $_POST['umur'];
        $tempat_kuliah = $_POST['tempat_kuliah'];
        $jurusan = $_POST['jurusan'];
        $prodi = $_POST['prodi'];

        //buat koneksi
        $strsql = "INSERT INTO about_me (nama, tgl_lahir, tempat_lahir, umur, tempat_kuliah, jurusan, prodi) 
        VALUES ('$nama','$tgl_lahir','$tempat_lahir','$umur', '$tempat_kuliah', '$jurusan', '$prodi')";
        
        $runSQL = mysqli_query($conn,$strsql);        
        if ($runSQL) {
            $status = 1; //sukses
        }  
        else {
            $status = 0; //tidak sukses;
        } 
    }            
    ?>

    
    <?php 
        if ($status == 1) {
    ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data berhasil diinput ke dalam database.
    </div>
    <?php 
        }
        else if ($status == 0){
    ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data tidak berhasil diinput ke dalam database.
    </div>
    <?php 
        }
    
    ?>

<div class="text4">
    <h1>Input About ME</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                <div class=text4>
                <h2>Input Here</h2>
                </div>
                    <form method="post" action="input_about.php">
                        <div class="form-group">
                            <label>Nama </label>
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input class="form-control" type="text" name="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input class="form-control" type="text" name="umur">
                        </div>
                        <div class="form-group">
                            <label>Tempat Kuliah</label>
                            <input class="form-control" type="text" name="tempat_kuliah">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input class="form-control" type="text" name="jurusan">
                        </div>
                        <div class="form-group">
                            <label>Prosi</label>
                            <input class="form-control" type="text" name="prodi">
                        </div>
                      
                        
                        <br>
                        <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">
                    </form>

                </div>
            </div>

            
        </div>
    </div>


    <div class="jumbotron text-center bg-dark" style="margin-bottom:0">
    <p>Footer</p>
    <p style="color:white">Copyright Website By Muhmmad Juliansyah | informtika 2020</p>
  </div>
  </div>
  
</body>


</html>