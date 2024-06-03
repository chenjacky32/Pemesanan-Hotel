<?php
  $koneksi = mysqli_connect("localhost","root","","hotel");
  if(mysqli_connect_errno()) {
      echo"koneksi gagal : ".mysqli_connect_errno();
  }

if(isset($_POST['tambah_staff'])) {
   $id_staff        = $_POST['id_staff'];
   $nm_staff        = $_POST['nama_staff'];
   $tempat_lahir    = $_POST['tempat_lahir'];
   $tanggal_lahir   = $_POST['tanggal_lahir'];
   $alamat          = $_POST['alamat'];
   $nomor_kontak    = $_POST['nomor_kontak'];
   $alamat_email    = $_POST['alamat_email'];
   $password = md5('123');

$tambah = mysqli_query($koneksi,"insert into staff values ('$id_staff','$nm_staff',' $tempat_lahir',' $tanggal_lahir','$alamat', '$nomor_kontak','$alamat_email')");

$akses = mysqli_query($koneksi,"insert into akses values ('$id_staff','$alamat_email','$password','2')");

if($tambah==true){
    header('location:index.php?page=data-staff');
}else{
    header('location:index.php?page=tambah-staff');
    }
}

if(isset($_POST['perbarui_staff'])) {
    $id_staff           = $_POST['id_staff'];
    $nm_staff           = $_POST['nama_staff'];
    $tempat_lahir       = $_POST['tempat_lahir'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $alamat             = $_POST['alamat'];
    $nomor_kontak       = $_POST['nomor_kontak'];
    $alamat_email       = $_POST['alamat_email'];
 
 $perbarui = mysqli_query($koneksi, "update staff set nama_staff='$nm_staff',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',nomor_kontak='$nomor_kontak',alamat_email='$alamat_email' where id_staff='$id_staff'");
 
 $akses = mysqli_query($koneksi, "update staff set username='$alamat_email' where no_akses='$id_staff'");
 
 if($perbarui==true){
     header('location:index.php?page=data-staff');
 }
} 

if(isset($_POST['hapus-staff'])) {
    $id_staff       = $_POST['id_staff'];
    $username       = $_POST['username'];
 
 $hapus = mysqli_query($koneksi, "delete from staff where id_staff='$id_staff'");
 $akses = mysqli_query($koneksi, "delete from akses where username='$username'");
 
 if($hapus=true){
     header('location:index.php?page=data-staff');
 }
}
?>