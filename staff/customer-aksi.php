<?php
  $koneksi = mysqli_connect("localhost","root","","hotel");
  if(mysqli_connect_errno()) {
      echo"koneksi gagal : ".mysqli_connect_errno();
  }

if(isset($_POST['tambahcust'])) {
   $id_customer         = $_POST['id_customer'];
   $nama_customer       = $_POST['nama_customer'];
   $tempat_lahir        = $_POST['tempat_lahir'];
   $tanggal_lahir       = $_POST['tanggal_lahir'];
   $alamat              = $_POST['alamat'];
   $nomor_kontak        = $_POST['nomor_kontak'];
   $alamat_email        = $_POST['alamat_email'];

$tambah = mysqli_query($koneksi,"insert into customer values ('$id_customer','$nama_customer',' $tempat_lahir',' $tanggal_lahir','$alamat','$nomor_kontak','$alamat_email')");

if($tambah==true){
    header('location:index.php?page=customer');
}else{
    header('location:index.php?page=tambah-customer');
    }
}
if(isset($_POST['perbaruicust'])) {
    $id_customer         = $_POST['id_customer'];
    $nama_customer       = $_POST['nama_customer'];
    $tempat_lahir        = $_POST['tempat_lahir'];
    $tanggal_lahir       = $_POST['tanggal_lahir'];
    $alamat              = $_POST['alamat'];
    $nomor_kontak        = $_POST['nomor_kontak'];
    $alamat_email        = $_POST['alamat_email'];
 
     
     $perbarui = mysqli_query($koneksi, "update customer set nama_customer='$nama_customer ',tempat_lahir='$tempat_lahir ',tanggal_lahir='$tanggal_lahir',alamat='$alamat',nomor_kontak='$nomor_kontak',alamat_email='$alamat_email'where id_customer='$id_customer'");
     
     if($perbarui==true){
         header('location:index.php?page=customer');
     }
    } 
    if(isset($_POST['hapuscust'])) {
    $id_customer        = $_POST['id_customer']; 
    $hapus              = mysqli_query($koneksi, "delete from customer where id_customer='$id_customer'");
     
     if($hapus=true){
         header('location:index.php?page=customer');
     }
    }
    ?>
