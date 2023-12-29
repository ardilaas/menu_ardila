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
?>
<h2>EDIT MENU</h2><hr/>
<form action="Simpan_menu.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="menu_id" value="<?php echo $menu_id;?>"/>    
Nama Barang
        <input type="text" name="nama_menu" value="<?php echo $nama_menu;?>"/><br/><hr/>
   
Harga Jual
<input type="text" name="harga" value="<?php echo $harga;?>"/><br/><hr/>
deskripsi
<textarea name="deskripsi" cols="30" rows="18" value="<?php echo $deskripsi;?>"></textarea><br/><hr/>
Gambar [max=1.5MB]
            <input type="file" name="foto"/>
            <input type="hidden" name="foto_lama" value="<?php echo $foto;?>"/> <br/>
            <img src="<?php echo "thumb/t_".$foto;?>"width="100px"/><br/><hr/>
            <input type="submit" value="Simpan" name="proses"/>
            <input type="reset" value="Reset" name="reset"/><hr/>
            <a href='tampil_menu.php'>Kembali ke Daftar Barang</a><br/>
            <hr/>

</form>