<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
  <!--Requered-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <!--Memunculkan tulisan-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

</head>

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

        .input {
        font-size: 15px;
        }

        .containter {
        font-size: 18px;
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

<script>
$(document).ready(function(){
   //create variable
   var counts = 0;
   $(".addtocart").click(function () {
   //to number and increase to 1 on each click
      counts += +1;
      $("#cart-counter").animate({
   //show span with number
                opacity: 1
            }, 300, function () {
   //write number of counts into span
                $(this).text(counts);
            });
        }); 
});
</script>

<div class="header">
    <div class="col-sm-12">
      <a class="navbar-brand" href="katalog.php">
      <img src="logo.jpg" alt="Logo" style="width:48px;" class="rounded-pill">
      </a>
      <a class="navbar-brand" href="https://instagram.com/hay_ka60?igshid=YmMyMTA2M2Y="><h1 style="text-align:left;font-style: initial; font-family:cursive"><b>Style Gallery</b></h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
      </button>
    </div><br>
    
    <div class="header-left">
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="addkatalog.php">Home</a>
            <a class="nav-link" href="https://instagram.com/hay_ka60?igshid=YmMyMTA2M2Y=">About Us</a>
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Katagori Produk</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Semua Produk</a></li>
                <li><a class="dropdown-item" href="index.php">Hoodie</a></li>
                <li><a class="dropdown-item" href="index.php">Jaket</a></li>
                <li><a class="dropdown-item" href="index.php">Kaos</a></li>
              </ul>
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Tautan</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://shopee.co.id">Shopee</a></li>
                <li><a class="dropdown-item" href="https://www.lazada.co.id">Lazada</a></li>
                <li><a class="dropdown-item" href="https://www.tokopedia.com">Toko Pedia</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="header-right">
      <a href="addkatalog.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-plus"></span>
        Tambah Produk 
      </button> </a>
      <a href="keranjang.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-shopping-cart"></span>
        Keranjang
      </button> </a>
    </div> 
</div>

<style>
.w3-tangerine {
  font-family: "Tangerine", serif;
}
</style>

<body><br>
  <div class="w3-container w3-tangerine">
    <div class="nav justify-content-center">
      <h1 class="w3-jumbo">Bring Your Happiness:)</h1>
    </div>
  </div>
</body>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12" style="background-color:rgb(204,102,102);">
     <h3><b>Katalog Display Produk</b></h3>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="judul-produk" style="background-color:rgb(171,75,82); padding: 5px 10px;">
      <h5 class="text-center mt-2">PRODUK</h5>
    </div>
  </div>
</div><br>

<div class="containter">
<?php
include('koneksi.php');
$sql="select * from produk order by harga asc";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "<div class='containter'>";
	
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<div class='col-xs-3'>";
		echo "<div class='col-xs-12'></br><img src='foto/".$row['FotoProduk']."' height='128px'></div>";
		echo "<div class='col-xs-12'><h3>".$row['NamaProduk']."</h3> ".number_format($row['Harga'],0,'','.')."</div>";
    //deskripsi
    echo "<div class='col-xs-12'><p>".$row['Deskripsi']."</p></div>";
    //form
    echo "<form action='proses_keranjang.php' method='post'>";
    echo "<input type='hidden' name='IDProduk' value='".$row['IDProduk']."'>";
    echo "<input type='hidden' name='Harga' value='".$row['Harga']."'>"; 
   //label masukan jumlah pembelian
    echo "<div class='col-xs-12'><label for='jumlah'>Jumlah Pembelian</label></div>";
    echo "<div class='col-xs-12'><input type='number' name='jumlah' id='jumlah' min='1' max='10' value='1'></div>";
    echo "<div class='col-xs-12'><input type='submit' class='btn btn-success' name='submit' value='Keranjang' class='addtocart' ></div>";
    echo "</form>";
    echo "</div>";
    }
    echo "</div>";                    
}
else
{
  echo "0 results";
}
?>

</div>

<br><br><br><br></br>
<footer>
<div class="footer">
  &copy; 2021 Pemrograman Web | FTII Unisbank.
  </footer> 
</div>