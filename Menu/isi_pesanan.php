<?php
    include "koneksi.php";
    $sql = "select menu_id, nama_menu from menu";
    $resjab = mysqli_query($kon, $sql);
    if (!$resjab) die("gagal query jabatan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pesanan</title>
</head>
<body>
    <form action="simpan_pesanan.php" method="post">
        <h2> SILAHKAN PESAN </h2>
    <table border="3">
    <tr><td>NAMA</td><td>
        <input type="text" name="nama_pemesan" size="20" maxlength="20">
</td></tr>
        <tr><td>MENU Makanan </td><td>
        <select name="menu_id">
            <?php
                while($rj = mysqli_fetch_assoc($resjab)){
                    echo "<option value='{$rj["menu_id"]}'>{$rj["nama_menu"]}</option>";
                }
            ?>
        </select></td></tr><tr><td>
        Tanggal </td><td><input type="date" name="tanggal_pesanan"></td></tr>
        <tr><td>Jumlah Porsi  </td><td> <input type="text" name="jumlah"></td></tr>
        <tr><td><input type="submit" value="Simpan" name="proses"></tr></td></table>
    </form>
</body>
</html>