
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


    <?php 
    $status = 2;
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php"; 
        $your_nama = $_POST['your_nama'];
        $email = $_POST['email'];
        $subjek = $_POST['subjek'];
        $komen = $_POST['komen'];

        //buat koneksi
        $strsql = "INSERT INTO contact_us (your_nama, email, subjek, komen) 
        VALUES ('$your_nama','$email','$subjek', '$komen')";
        
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
    <h1>Contact Us</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="jumbotron">
                <div class=text4>
                <h2>Leave Your Message</h2>
                </div>
                    <form method="post" action="contact.php">
                    
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="your_nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Subjek</label>
                            <input class="form-control" type="text" name="subjek">
                        </div>
                        <div class="form-group">
                        <label for="comment">Your Message:</label>
                        <textarea class="form-control" rows="5" id="comment" name="komen"></textarea>
                        </div>

                        
                        <br>
                        <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">
                    </form>

                </div>
            </div>

            <div class="col-sm-6">
                <div class="jumbotron">
                <h2 class="text4">Our Social Media</h2><br>
                <div class="row">
                
                <div class="col">
                <span style="font-size: 6em; color: black;">
                <i class="fab fa-instagram-square"></i>
                </span>

                <span style="font-size: 6em; color: black;">
                <i class="fab fa-facebook-square"></i>
                </span>

                <span style="font-size: 6em; color: black;">
                <i class="fab fa-twitter-square"></i>
                </span>

                <span style="font-size: 6em; color: black;">
                <i class="fab fa-github-square"></i>
                </span>
                </div>

                <div class="col">
                <h6>Email:</h6>
                <h5>46m.juliansyah@gmail.com</h5>

                <h6>Call:</h6>
                <h5>081212805404</h5>
                </div>  

               </div>
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