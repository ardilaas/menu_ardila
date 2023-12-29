<?php 
    $nama_pemesan       = htmlspecialchars($_POST['nama_pemesan']);
    $tanggal_pesanan     = htmlspecialchars($_POST['tanggal_pesanan']);
    $menu_id       = htmlspecialchars($_POST['menu_id']);
    $jumlah  = htmlspecialchars($_POST["jumlah"]);
    $proses     = htmlspecialchars($_POST["proses"]);

    // lakukan validasi
    $dataOK = "YA";
    if (empty(trim($nama_pemesan))){
        $dataOK = "TIDAK";
        echo "kode atlet Pegawai tidak boleh kosong <br/>";
    }
    if (empty(trim($tanggal_pesanan))){
        $dataOK = "TIDAK";
        echo "cabang olahraga  tidak boleh kosong <br/>";
    }
    if (empty(trim($jumlah))){
        $dataOK = "TIDAK";
        echo "Nama atlet tidak boleh kosong <br/>";
    }
    // sampai sini
    if ($dataOK == "TIDAK"){
        echo "Masih ada kesalahan <br/>";
        echo "<input type='button' value='Perbaiki Isian'
                onClick='self.history.back()' >";
        exit();
    }


    include "koneksi.php";
    $sql = "insert into pesanan 
        (nama_pemesan, tanggal_pesanan, menu_id, jumlah)
        values
        ('$nama_pemesan', '$tanggal_pesanan', '$menu_id', '$jumlah')
    ";

    $hasil = mysqli_query($kon, $sql);
    if (!$hasil){
        echo "gagal Simpan";
    } else {
        header("location:tampil_pesanan.php");
    }
?>