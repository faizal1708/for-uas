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
            <div class=" col-md-12">
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
                    <!--kategori dari database -->
                    </div>
                    <button style="margin-left:25px" type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
            <!--edit data database dengan modal form -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Daftar Produk</h4>
                        </div>
                        <div class="modal-body">    
                            <form action="addkatalog.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="kode">Kode Produk</label>
                                    <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Produk">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="textarea" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskirpsi Produk">
                                    <label for="foto">Foto Produk</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"name='edit'><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- fungsi PHP untuk upload gambar ke database -->
    <?php
    if (isset($_POST['submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $kategori = $_POST['kategori'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $fotobaru = date('dmYHis') . $foto;
        $path = "foto/" . $fotobaru;
        if (move_uploaded_file($tmp, $path)) {
            $query = "INSERT INTO produk VALUES('" . $kode . "','" . $nama . "','" . $harga . "','" . $deskripsi . "','" . $fotobaru . "','" . $kategori . "')";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                echo "<script>alert('Berhasil menambahkan data.');window.location='katalog.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan data.');window.location='addkatalog.php';</script>";
            }
        } else {
            echo "<script>alert('Gagal menambahkan data.');window.location='addkatalog.php';</script>";
        }
    }
    ?>
    

<!-- edit data -->
    <?php
    // Check if the form was submitted
if (isset($_POST['edit'])) {
    // Get form data
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    // You can handle the uploaded file here if needed

    // Update query
    $sql = "UPDATE produk SET IDProduk='$kode',NamaProduk='$nama', Harga='$harga', Deskripsi='$deskripsi' WHERE IDProduk='$kode'";

    // Perform the update
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        // Redirect or perform any other actions after successful update
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>
    ?>
    <!-- hapus data -->
    <?php
    if (isset($_GET['kode'])) {
        $kode = $_GET['kode'];
        $sql = "DELETE FROM produk WHERE IDProduk='" . $kode . "'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "<script>alert('Berhasil menghapus data.');window.location='addkatalog.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data.');window.location='addkatalog.php';</script>";
        }
    }
    ?>
<!--tampilkan tabel produk dari database -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Produk</h2>
                <table class="table table-bordered">
                    <thead>
                           <th scope ="col">Kode Produk</th>
                           <th scope ="col">Nama Produk</th>
                           <th scope ="col">Harga</th>
                           <th scope ="col">Deskripsi</th>
                           <th scope ="col">Foto Produk</th>
                           <th scope ="col">Kategori</th>
                           <th scope ="col">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM produk ORDER BY IDProduk ASC  ";
                        $result = mysqli_query($conn, $sql);    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)
                            ) {
                                echo "<tr>";
                                echo "<td>" . $row['IDProduk'] . "</td>";
                                echo "<td>" . $row['NamaProduk'] . "</td>";
                                echo "<td>" . $row['Harga'] . "</td>";
                                echo "<td>" . $row['Deskripsi'] . "</td>";
                                echo "<td><img src='foto/" . $row['FotoProduk'] . "' width='100' height='100'></td>";
                                echo "<td>" . $row['IDKategori'] . "</td>";
                                echo "<td>";
                                //edit data menggunakan modal 
                                echo "<a href='editform.php' class='btn btn-warning'>Edit</a>";
                                echo str_repeat('&nbsp;', 3);
                                //hapus data 
                                echo "<a href='addkatalog.php?kode=" . $row['IDProduk'] . "' class='btn btn-danger'>Hapus</a>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!--footer-->
<div class="footer">
  &copy; 2021 Pemrograman Web | FTII Unisbank.
</div>

</body>
</html>