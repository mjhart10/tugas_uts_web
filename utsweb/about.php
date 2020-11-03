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


<nav class="navbar navbar-expand-lg navbar-light bg-secondary">

<a class="navbar-brand" href="home.php">Home</a>

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
      <a class="nav-link" href="education.php">Pendidikan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gallery.php">Gallery</a>
    </li>
   
  </ul>


 

</div>

</nav>
  <br><br>

  <div class="text4">
    <h1 class="display-3">Portfolio</h1>
  </div>

  <div class="container" style="margin-top:30px">
    <div class="jumbotron">
      <div class="row">

        <div class="img3"> <img src=gambar/avatarmj.jpg> </div> <div class="text-center">
        <div class="text2">
          <h1 class="">Muhammad Juliansyah</h1>
          <h3>2018071037 | Informatika</h3>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php
 $strSQL = "SELECT * FROM about_me";
 $runStrSQL = mysqli_query($conn,$strSQL);
 $jmlRowData = mysqli_num_rows($runStrSQL);
 if ($jmlRowData < 0) {
   echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
 }
 else {
   while($row = mysqli_fetch_assoc($runStrSQL)) {
 
?>


  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-6">
        <div class="jumbotron">

          <h2 class="font-weight-bold">About ME </h2>
          <div class="progress">
            <div class="progress-bar bg-info" style="width:90%"></div>
          </div><br>
          <form action="/action_page.php">

            <div class="form-group">
              <label for="email">Nama</label>
              <input type="email" name="readonly_input" class="form-control" placeholder="<?php echo $row['nama']; ?>"
                id="readonly_input" readonly>
            </div>

            <div class="form-group">
              <label for="email">Tanggal Lahir</label>
              <input type="email" name="readonly_input" class="form-control" placeholder="<?php echo $row['tgl_lahir']; ?>"
                id="readonly_input" readonly>
            </div>

            <div class="form-group">
              <label for="email">Tempat Lahir</label>
              <input type="email" name="readonly_input" class="form-control" placeholder="<?php echo $row['tempat_lahir']; ?>"
                id="readonly_input" readonly>
            </div>

            <div class="form-group">
              <label for="email">Umur</label>
              <input type="email" name="readonly_input" class="form-control" placeholder="<?php echo $row['umur']; ?>"
                id="readonly_input" readonly>
            </div>



          </form>


        </div><br>
      </div>

      <div class="col-sm-6">
        <div class="jumbotron">

          <h2 class="font-weight-bold">About ME </h2>

          <div class="progress">
            <div class="progress-bar bg-danger" style="width:90%"></div>
          </div><br>

          <form action="/action_page.php">

            <div class="form-group">
              <label for="email">Tempat Kuliah</label>
              <input type="email" name="readonly_input" class="form-control" placeholder="<?php echo $row['tempat_kuliah']; ?>"
                id="readonly_input" readonly>
            </div>

            <div class="form-group">
              <label for="email">Jurusan</label>
              <input type="email" name="readonly_input" class="form-control" placeholder="<?php echo $row['jurusan']; ?>"
                id="readonly_input" readonly>
            </div>

            <div class="form-group">
              <label for="email">Prodi</label>
              <input type="email" name="readonly_input" class="form-control" placeholder="<?php echo $row['prodi']; ?>"
                id="readonly_input" readonly>
            </div>

          </form>


        </div><br>
      
      </div>


    </div>
    <?php
        }
      }
        ?>
  </div>


  <div class="jumbotron text-center bg-dark" style="margin-bottom:0">
    <p>Footer</p>
    <p style="color:white">Copyright Website By Muhmmad Juliansyah | informtika 2020</p>
  </div>
  </div>

</body>

</html>