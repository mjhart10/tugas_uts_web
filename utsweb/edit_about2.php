<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
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
      
      include_once "koneksi.php";
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1>LIST ABOUT_ME</h1>
        </div>
      </div>
      <div class="row mb-3 mt-3">
        <div class="col-md-12">
        <a href="input_about.php" class="btn btn-primary">Input Data</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-striped">
          <thead>
            <tr>
              <th>Kode </th>
              <th>Nama </th>
              <th>Tanggal Lahir</th>
              <th>Tempat Lahir</th>
              <th>Tempat Kuliah</th>
              <th>Jurusan</th>
              <th>prodi</th>
            </tr>
          </thead>
          <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM about_me";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>
            <tr>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["nama"] ?></td>
              <td><?php echo $row["tgl_lahir"] ?></td>
              <td><?php echo $row["umur"] ?></td>
              <td><?php echo $row["tempat_kuliah"] ?></td>
              <td><?php echo $row["jurusan"] ?></td>
              <td><?php echo $row["prodi"] ?></td>
              <td>
                <a href="edit_about.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Edit</a>
                <a href="delete_about.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
    <?php 
      }
    }
    ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
    
    <div class="jumbotron text-center bg-dark" style="margin-bottom:0">
    <p>Footer</p>
    <p style="color:white">Copyright Website By Muhmmad Juliansyah | informtika 2020</p>
  </div>
  </div>

     <!-- JS, Popper.js, and jQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
</body>
</html>