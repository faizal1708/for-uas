<?php
include('koneksi.php');
include('proses_keranjang.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

  <!--Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <!--Requered-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
        <style>

        .header {
            overflow: hidden;
            background-color:rgb(203,65,84);
            padding: 14px 18px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
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
<<div class="header">
    <div class="col-sm-12">
      <a class="navbar-brand" href="katalog.php">
      <img src="logo.jpg" alt="Logo" style="width:48px;" class="rounded-pill">
      </a>
      <a class="navbar-brand" href="https://instagram.com/hay_ka60?igshid=YmMyMTA2M2Y="><h1 style="text-align:left;font-style: initial; font-family:cursive"><b>Style Gallery</b></h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
      </button>
    </div><br>

    <div class="header-right">
      <a href="keranjang.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-shopping-cart"></span>
                Keranjang
      </button>
      <a href="katalog.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-plus" ></span>
                Katalog
      </button></a>

    </div>
</div>

    <!--tabel nota bayar-->
    <h1>Nota Pembayaran</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Diskon</th>
                <th scope="col">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            $no = 1;
            $query = mysqli_query($conn, "select * from keranjang k, produk p where k.id_produk=p.IDProduk");
            while ($data = mysqli_fetch_array($query)) {
                $subtotal = $data['harga'] * $data['jumlah'];
                //diskon jika subtotal > 500000
                if ($subtotal > 500000) {
                    $diskon = $subtotal * 0.05;
                } else {
                    $diskon = 0;
                }
               //update diskon sesuai masing- masing id_produk
                $update_diskon = mysqli_query($conn, "update keranjang set diskon='$diskon' where id_produk='$data[id_produk]'");
                //sum row diskon
                $total_diskon = mysqli_query($conn, "select sum(diskon) as total_diskon from keranjang");
                $total_diskon = mysqli_fetch_array($total_diskon);
                $total_diskon = $total_diskon['total_diskon'];
                $total += $subtotal;
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['NamaProduk']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $diskon; ?></td>
                    <td><?php echo $subtotal; ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="5" align="left">Total Diskon</td>
                <td><?php echo $total_diskon; ?></td>
            </tr>
            <tr>
                <td colspan="5" align="left">Total</td>
                <td><?php echo $total; ?></td>
            </tr>            
            <td colspan="5" align="left">Total Bayar</td>
            <td><?php error_reporting(0); echo $total - $total_diskon; ?></td>
        </tbody>
    </table>
   <!--form-->
    <form action="proses_bayar.php" method="post">
        <!--button submit -->
        <button type="submit" name="bayar" class="btn btn-warning btn-lg" onclick="myFunction()"><span class="glyphicon glyphicon-cart" ></span>Bayar</button>
        <a href="katalog.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-plus" ></span>
            Tambah Barang
        </button></a>
    </form>
        <script>
            function myFunction() {
                alert("Pembayaran Berhasil");
            }
        </script>
</body>
</html>