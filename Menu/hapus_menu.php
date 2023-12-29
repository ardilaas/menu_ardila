<?php
$menu_id = $_GET["menu_id"];
include "koneksi.php";
$sql = "select * from Menu where menu_id = '$menu_id'";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ("Gagal query...");

$data = mysqli_fetch_array($hasil);
$nama_menu = $data["nama_menu"];
$harga = $data["harga"];
$deskripsi = $data["deskripsi"];
$foto = $data["foto"];

echo "<h2>Konfirmasi Hapus</h2>";
echo "Nama Makanan : ".$nama_menu."<br/>";
echo "Harga  : ".$harga."<br/>";
echo "Deskripsi : ".$deskripsi."<br/>";
echo "Foto : <img src='thumb/t_".$foto."'/><br/><br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='hapus_menu.php?menu_id=$menu_id&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='tampil_menu.php'> TIDAK </a> <br/><br/>";

if (isset($_GET['hapus'])){
    $sql = "delete from menu where menu_id = '$menu_id'";
    $hasil = mysqli_query($kon,$sql);
    if (!$hasil) {
        echo "Gagal Hapus menu: $nama_menu ..<br/>";
        echo "<a href='tampil_menu.php'>Kembali ke Daftar Barang</a>";
    } else {
        $gbr = "pict/$foto";
        if (file_exists($gbr)) unlink($gbr);
        $gbr = "thumb/t_$foto";
        if (file_exists($gbr)) unlink($gbr);
        header('location:tampil_menu.php');
    }
}?>