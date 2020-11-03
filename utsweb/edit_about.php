<?php
include_once  "koneksi.php";
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
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </nav>
  <br><br>

  <?php   
    $status = 2;  
    if (isset($_POST['id'])) {
        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $tempat_lahir = $_POST['tempat_lahir']; 
        $umur = $_POST['umur'];
        $tempat_kuliah = $_POST['tempat_kuliah'];
        $jurusan = $_POST['jurusan'];
        $prodi = $_POST['prodi'];

         //buat koneksi
         $strSQL = "UPDATE about_me SET nama='$nama', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', umur='$umur', tempat_kuliah='$tempat_kuliah', jurusan='$jurusan', prodi='$prodi'  WHERE id='$id'";
        // echo $strSQL;
       //die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }      
         header("refresh:3; url=about.php"); 
    }        
    else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $strSQL = "SELECT * FROM about_me WHERE id='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $nama = $row['nama'];
                $tgl_lahir = $row['tgl_lahir'];
                $tempat_lahir = $row['tempat_lahir']; 
                $umur = $row['umur'];
                $tempat_kuliah = $row['tempat_kuliah'];
                $jurusan = $row['jurusan'];
                $prodi = $row['prodi'];
            }
        }
    }  
    else {       
        $nama = "";
        $tgl_lahir = "";
        $tempat_lahir = "";
        $umur = "";
        $tempat_kuliah = "";
        $jurusan = "";
        $prodi = "";
    }  
    $disableForm = isset($_GET['id']) ? "enabled": "disabled";
    ?>
    <div class="container">
        <h2>Pendaftaran Mata Kuliah versi 2 (dg Modal)</h2>   

        <?php 
        include "modalform.php";
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput ke dalam database. Halaman ini akan kembali ke List Mahasiswa dalam 3 detik
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
        <form id="myform" method="post" action="edit_about.php">
            <div class="form-group">
                <label>Kode</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>" readonly 
                <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input id="nama" class="form-control" type="text" name="nama" value="<?php echo $nama ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input id="tlg_lahir" class="form-control" type="text" name="tgl_lahir" value="<?php echo $tgl_lahir ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input id="tempat_lahir" class="form-control" type="text" name="tempat_lahir" value="<?php echo $tempat_lahir ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Umur</label>
                <input id="umur" class="form-control" type="text" name="umur" value="<?php echo $umur ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>tempat_kuliah</label>
                <input id="tempat_kuliah" class="form-control" type="text" name="tempat_kuliah" value="<?php echo $tempat_kuliah ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Jurusan</label>
                <input id="jurusan" class="form-control" type="text" name="jurusan" value="<?php echo $jurusan ?>" <?php echo $disableForm ?>>
            </div>
            
            <div class="form-group">
                <label>Prodi</label>
                <input id="prodi" class="form-control" type="text" name="prodi" value="<?php echo $prodi ?>" <?php echo $disableForm ?>>
            </div>           
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan" <?php echo $disableForm ?>>   
        </form>
        
    </div>
   
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const nama = $('#nama').val();
            const tgl_lahir = $('#tgl_lahir').val();
            const tempat_lahir = $('#tempat_lahir').val();

            $('#idku').text(id);
            $('#namaku').text(nama);
            $('#tgl_lahirku').text(tgl_lahir);
            $('#tempatku').text(tempat_lahir);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>


  <div class="jumbotron text-center bg-dark" style="margin-bottom:0">
    <p>Footer</p>
    <p style="color:white">Copyright Website By Muhmmad Juliansyah | informtika 2020</p>
  </div>
  </div>

</body>

</html>