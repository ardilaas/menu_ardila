<?php 
$nama_pemesan ="";
if(isset($_POST["nama_pemesan"]))
    $nama_pemesan = $_POST["nama_pemesan"];
include "koneksi.php";
$sql = "select * from pesanan where nama_pemesan like '%".$nama_pemesan."%'
       order by pesanan_id desc";
$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<a href="isi_pesanan.php">PESAN </a> |
<a href="daftar_menu.php">DAFTAR MENU </a>
&nbsp; &nbsp; &nbsp;
    <?php
        $no = 0;
        while ($row = mysqli_fetch_assoc($hasil)){
            echo "<hr/> <table border = '1'>";
            echo "<tr><td>NAMA : ".$row['nama_pemesan']."</td></tr>";
            echo "<tr><td>Tanggal: ".$row['tanggal_pesanan']."</td></tr>";
            echo "<tr><td>menu_id: ".$row['menu_id']."</td></tr>";
            echo "<tr><td>jumlah: ".$row['jumlah']."</td></tr>";
            echo "<br/> </table>";
        }
    ?>