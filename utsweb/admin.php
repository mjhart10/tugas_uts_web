
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
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

  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <div class="jumbotron bg-warning">
        <h3> Edit About</h3>
          <a href="edit_about2.php" class="btn btn-info">Edit About</a>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="jumbotron bg-info">
        <h3> Edit Hobbi</h3>
          <a href="edit_hobbi2.php" class="btn btn-warning">Edit</a>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="jumbotron bg-danger">
        <h3> Edit Pendidikan</h3>
          <a href="edit_pendidikan2.php" class="btn btn-primary">Edit</a>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-sm-4">
        <div class="jumbotron bg-secondary">
        <h3></h3>
          <a href="edit_about2.php" class="btn btn-info">Edit </a>
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