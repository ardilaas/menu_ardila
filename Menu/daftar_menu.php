<?php 
$nama_menu ="";
if(isset($_POST["nama_menu"]))
    $nama_menu = $_POST["nama_menu"];
include "koneksi.php";
$sql = "select * from Menu where nama_menu like '%".$nama_menu."%'
       order by menu_id desc";
$hasil = mysqli_query($kon, $sql);
if (!$hasil)
die("Gagal query..".mysqli_error($kon));
?>
<a href="cari_menu.php">CARI MENU</a> |
<a href="isi_pesanan.php">PESAN </a>
&nbsp; &nbsp; &nbsp;
    <?php
        $no = 0;
        while ($row = mysqli_fetch_assoc($hasil)){
            echo "<hr/>";
            echo "<h3>".$row['nama_menu']."</h3>";
            echo "<a href='pict/{$row['foto']}'/>
                  <img src='thumb/t_{$row['foto']}' width='100'/>
                  </a>";
            echo "<h3> HARGA : ".$row['harga']."</h3>";
            echo $row['deskripsi']."<br/>";
            echo "<br/>";
            echo "<hr/>";
        }
    ?>