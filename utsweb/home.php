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
  <style>
    .fakeimg {
      height: 250px;
     width :800px;
    }
  </style>
</head>

<body>

<?php
    //buat sql
    $strSQL = "SELECT * FROM hoby";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            
  

  <div class="jumbotron text-center" style="margin-bottom:0">
    <img src="gambar/xxx.jpg" class="rounded-circle" class="img1" alt="Cinque Terre">
    <br><br>
    <h1 class="text1">Muhammad Juliansyah </h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>

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


      <a href="admin.php" class="btn btn-info">Admin</a>

    </div>

  </nav>

  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-4">
        <a href="about.php" class="text-dark"><h2>About Me</h2></a>
        <div class="img2"><img src="gambar/therealmj1.jpg"> </div>
        <a href="about.php" class="text-dark" ><p>Nama Saya muhmaad juliansyah saya kuliah di universitas pemb....</p></a>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">

        <h2>Hobbies</h2>
        <img src="gambar/soccer.jpg" class="fakeimg"> 
  
        <p><?php echo $row["hoby1"] ?> </p>
        <br>
        <h2>Hobbies</h2>
        <img src="gambar/basketball.jpg" class="fakeimg">
  
        <p> <?php echo $row["hoby2"] ?> </p>
      </div>
    </div>
  </div>

  <?php
  }
}
?>

  <div class="jumbotron text-center bg-dark" style="margin-bottom:0">
    <p>Footer</p>
    <p style="color:white">Copyright Website By Muhmmad Juliansyah | informtika 2020</p>
  </div>

</body>

</html>