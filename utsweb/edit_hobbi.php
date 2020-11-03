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
        $hoby1 = $_POST['hoby1'];
        $hoby2 = $_POST['hoby2'];
       
       
         //buat koneksi
         $strSQL = "UPDATE hoby SET hoby1='$hoby1', hoby2='$hoby2' WHERE id='$id'";
        //echo $strSQL;
       //die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }      
         header("refresh:3; url=home.php"); 
    }        
    else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $strSQL = "SELECT * FROM hoby WHERE id='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $hoby1 = $row['hoby1'];
                $hoby2 = $row['hoby2'];
            }
        }
    }  
    else {       
        $hoby1 = "";
        $hoby2 = "";
       
    }  
    $disableForm = isset($_GET['id']) ? "enabled": "disabled";
    ?>
    <div class="container">
        <h2>Pendaftaran Mata Kuliah versi 2 (dg Modal)</h2>   

        <?php 
        include "modalhoby.php";
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
        <form id="myform" method="post" action="edit_hobbi.php">
            <div class="form-group">
                <label>Kode</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>" readonly 
                <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Hobbies 1</label>
                <input id="hoby1" class="form-control" type="text" name="hoby1" value="<?php echo $hoby1 ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Hobbies 2</label>
                <input id="hoby2" class="form-control" type="text" name="hoby2" value="<?php echo $hoby2 ?>" <?php echo $disableForm ?>>
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
            const hoby1 = $('#hoby1').val();
            const hoby2 = $('#hoby2').val();
           

            $('#idku').text(id);
            $('#hoby1').text(hoby1);
            $('#hoby2').text(hoby2);
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