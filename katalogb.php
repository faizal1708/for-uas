<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--css-->
<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: grey;
        color: white;
        text-align: right;
    }

   .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
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
    </style>
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
  <a href="#default" class="logo">Katalog Produk</a>
  <div class="header-right">
          <a href="addkatalog.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-plus" ></span>
                Tambah Produk 
        </button> </a>
        <a href="keranjang.php"><button type="button" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-shopping-cart"></span>
                Checkout
        </button> </a>
  </div>
</div> 

<br>

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
		    echo "<div class='col-xs-12'><img src='foto/".$row['FotoProduk']."' height='128px'></div>";
		    echo "<div class='col-xs-12'><h3>".$row['NamaProduk']."</h3> ".number_format($row['Harga'],0,'','.')."</div>";
		"</div>";
    //deskripsi
    echo "<div class='col-xs-12'><p>".$row['Deskripsi']."</p></div>";
    //form
    echo "<form action='proses_keranjang.php' method='post'>";
    echo "<input type='hidden' name='id_produk' value='".$row['IDProduk']."'>";
    echo "<input type='hidden' name='harga' value='".$row['Harga']."'>";
   //label masukan jumlah pembelian
    echo "<div class='col-xs-12'><label for='jumlah'>Jumlah Pembelian</label></div>";
    echo "<div class='col-xs-12'><input type='number' name='jumlah' id='jumlah' min='1' max='10' value='1'></div>";
    echo "<div class='col-xs-12'><input type='submit' class='btn btn-success btn-sm addtocart name='submit' value='Tambah ke Keranjang' class='addtocart'></div>";
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

<footer>
<div class="footer">
  &copy; 2021 Pemrograman Web | FTII Unisbank.
  </footer> 
</div>