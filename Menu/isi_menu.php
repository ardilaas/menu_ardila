<h2>ISIKAN MENU</h2>
<form action="Simpan_menu.php" method="post" enctype="multipart/form-data">
   
        Nama Menu
        <input type="text" name="nama_menu"/><br/><hr/>
        Harga Jual
        <td><input type="text" name="harga"/><br/><hr/>
        deskripsi
        <textarea name="deskripsi" cols="30" rows="18"></textarea><br/><hr/>
         Gambar [max=1.5MB]
        <input type="file" name="foto"/><br><hr/>
            <input type="submit" value="Simpan" name="proses"/>
            <input type="reset" value="Reset" name="reset"/>
</form>