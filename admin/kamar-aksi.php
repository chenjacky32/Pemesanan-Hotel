<?php
  $koneksi = mysqli_connect("localhost","root","","hotel");
  if(mysqli_connect_errno()) {
      echo"koneksi gagal : ".mysqli_connect_errno();
  }

if(isset($_POST['tambah_kamar'])) {
   $kode_kamar      = $_POST['kode_kamar'];
   $no_kamar        = $_POST['no_kamar'];
   $jenis_kamar     = $_POST['jenis_kamar'];
   $harga_kamar     = $_POST['harga_kamar'];

$tambah = mysqli_query($koneksi,"insert into kamar values ('$kode_kamar','$no_kamar',' $jenis_kamar',' $harga_kamar')");

if($tambah==true){
    header('location:index.php?page=kamar');
}else{
    header('location:index.php?page=tambah-kamar');
    }
}
if(isset($_POST['perbarui_kamar'])) {
$kode_kamar      = $_POST['kode_kamar'];
$no_kamar        = $_POST['no_kamar'];
$jenis_kamar     = $_POST['jenis_kamar'];
$harga_kamar     = $_POST['harga_kamar'];
 
 $perbarui = mysqli_query($koneksi, "update kamar set no_kamar='$no_kamar',jenis_kamar='$jenis_kamar',harga_kamar='$harga_kamar'where kode_kamar='$kode_kamar'");
 
 if($perbarui==true){
     header('location:index.php?page=kamar');
 }
} 
if(isset($_POST['hapus-kamar'])) {
$kode_kamar         = $_POST['kode_kamar']; 
$hapus              = mysqli_query($koneksi, "delete from kamar where kode_kamar='$kode_kamar'");
 
 if($hapus=true){
     header('location:index.php?page=kamar');
 }
}
?>