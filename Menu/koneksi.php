<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "Menu"; 

$kon = new mysqli($host, $username, $password, $database);

if ($kon->connect_error) {
    die("Koneksi gagal: " . $kon->connect_error);
}
$sqlTableMenu = "CREATE TABLE if not exists Menu (
    menu_id  int(4) auto_increment not null primary key,
    nama_menu VARCHAR(95) not null,
    harga int(12) not null,
    deskripsi varchar(2000)not null,
    foto VARCHAR(75) not null default'')";
    mysqli_query($kon, $sqlTableMenu) or die ("Gagal buat Table Menu");
$sqlTablePesanan = "CREATE TABLE if not exists Pesanan (
    pesanan_id INT(4) auto_increment not null PRIMARY KEY,
    nama_pemesan varchar(20) not null,
    tanggal_pesanan date not null,
    menu_id INT(4) not null,
    jumlah INT(10) not null,
    subtotal DECIMAL(12) not null,
    FOREIGN KEY (menu_id) REFERENCES Menu(menu_id))";
    mysqli_query($kon, $sqlTablePesanan) or die ("Gagal buat Table Menu");
?>
