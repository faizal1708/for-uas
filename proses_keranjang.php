<?php
include('koneksi.php');

// jika tombol keranjang di index.php di klik maka tambahkan data pada tabel keranjang

// proses_keranjang.php
include('koneksi.php');

if(isset($_POST['submit'])) {
    $id_produk = $_POST['IDProduk'];
    $harga = $_POST['Harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;

    $sql = "INSERT INTO keranjang (id_produk, harga, jumlah, total) VALUES ('$id_produk', '$harga', '$jumlah', '$total')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Produk berhasil ditambahkan ke keranjang belanja');window.location='keranjang.php';</script>";
        // Redirect to the catalog page after successfully adding to cart
        header("Location: katalog.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!-- PROSES Subtotal -->
<?php
$sql = "SELECT SUM(total) AS total FROM keranjang";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total = $row['total'];
?>

<!-- hapus data -->
<?php
    if (isset($_GET['kode'])) {
        $kode = $_GET['kode'];
        $sql = "DELETE FROM keranjang WHERE id_produk='" . $kode . "'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "<script>alert('Berhasil menghapus data.');window.location='keranjang.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus data.');window.location='keranjang.php';</script>";
        } 
    }
    ?>


