<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>addkatalog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!--Requered-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <!--Memunculkan tulisan-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <!--css-->
<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color:grey;
        color: white;
        text-align: right;
    }

    .header {
            overflow: hidden;
            background-color:rgb(203,65,84);
            padding: 14px 18px;   
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-left {
            float: left;
            padding: 15px;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }

        .container {
        font-size: 16px;
        }

        .form-group {
        font-size: 17px;
        margin-left: 14px;
        }


        .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: grey;
        color: white;
        text-align: right;
        }   
    </style>
</head>
<body>
    <div class="header">
      <div class="col-sm-12">
        <a class="navbar-brand" href="katalog.php">
        <img src="logo.jpg" alt="Logo" style="width:48px;" class="rounded-pill">
        </a>
        <a class="navbar-brand" href="https://instagram.com/hay_ka60?igshid=YmMyMTA2M2Y="><h1 style="text-align:left;font-style: initial; font-family:cursive"><b>Style Gallery</b></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="header-left">
        <h3>Input Data Produk</h3>
      </div>

      <div class="header-right">
        <a href="katalog.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-plus" ></span>
                Katalog
        </button></a>
      </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
          <div class=" col-md-12" style="background-color: #a99d9d; padding: 40px; margin: 35px;"> 
                <form action="addkatalog.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="kode">Kode Produk</label>
                        <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Produk">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="textarea" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskirpsi Produk">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Produk</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                    </div>      
        
                    <button style="margin-left:25px" type="submit" class="btn btn-primary" name="edit">Submit</button>
                </form>
          </div>
        </div>
    </div>
          


<?php
// Include your database connection file


// Check if the form was submitted
if (isset($_POST['edit'])) {
    // Get form data
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    // You can handle the uploaded file here if needed

    // Update query
    $sql = "UPDATE produk SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE kode='$kode'";

    // Perform the update
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        // Redirect or perform any other actions after successful update
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>


<!--footer-->
<div class="footer">
  &copy; 2021 Pemrograman Web | FTII Unisbank.
</div>
</body>
</html>
