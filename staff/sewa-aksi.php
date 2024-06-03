<?php
  $koneksi = mysqli_connect("localhost","root","","hotel");
  if(mysqli_connect_errno()) {
      echo"koneksi gagal : ".mysqli_connect_errno();
  }

if(isset($_POST['sewa_kamar'])) {
    $no_transaksi       = $_POST['no_transaksi'];
    $kode_kamar         = $_POST['kode_kamar'];
    $no_kamar           = $_POST['no_kamar'];
    $jenis_kamar        = $_POST['jenis_kamar'];
    $harga_kamar        = $_POST['harga_kamar'];
    $jumlah             = $_POST['jumlah'];
    $tgl_checkin        = $_POST['tgl_checkin'];
    $tgl_checkout       = $_POST['tgl_checkout'];

$tambah = mysqli_query($koneksi,"insert into transaksi_sewa_kamar values ('$no_transaksi','$kode_kamar','$no_kamar','$jenis_kamar','$harga_kamar','$jumlah','$tgl_checkin','$tgl_checkout')");


if($tambah==true){
    header('location:index.php?page=sewakamar');
}else{
    header('location:index.php?page=tambah-sewakamar');
    }
}
    if(isset($_POST['perbaruisewa'])) {
        $no_transaksi       = $_POST['no_transaksi'];
        $kode_kamar         = $_POST['kode_kamar'];
        $no_kamar           = $_POST['no_kamar'];
        $jenis_kamar        = $_POST['jenis_kamar'];
        $harga_kamar        = $_POST['harga'];
        $jumlah             = $_POST['jumlah'];
        $tgl_checkin        = $_POST['tgl_checkin'];
        $tgl_checkout       = $_POST['tgl_checkout'];
 
 $perbarui = mysqli_query($koneksi, "update transaksi_sewa_kamar set kode_kamar='$kode_kamar',no_kamar='$no_kamar',jenis_kamar='$jenis_kamar',harga='$harga_kamar',jumlah='$jumlah',tgl_checkin='$tgl_checkin',tgl_checkout='$tgl_checkout'where no_transaksi='$no_transaksi'");
  
 if($perbarui==true){
     header('location:index.php?page=sewakamar');
 }
} 
if(isset($_POST['hapussewa'])) {
    $no_transaksi       = $_POST['no_transaksi'];
    $hapus              = mysqli_query($koneksi, "delete from transaksi_sewa_kamar where no_transaksi='$no_transaksi'");
     
     if($hapus=true){
         header('location:index.php?page=sewakamar');
     }
    }

?>