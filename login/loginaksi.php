<?php
    $koneksi = mysqli_connect("localhost","root","","hotel");
    if(mysqli_connect_errno()) {
        echo "Koneksi Gagal : ".mysqli_connect_errno();
    }
    
    session_start();
    if(isset($_POST['loginaksi'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['tipe'] = $_POST['tipe'];
        $cekdata = mysqli_query($koneksi, "select*from akses where username='".$_POST['username']."' and password='".md5($_POST['password'])."' and tipe_akses='".$_POST['tipe']."'");
        $periksadata = mysqli_num_rows($cekdata);
        if($periksadata>0) {
            if($_POST['tipe']==1) {
                header('location:../admin/index.php?page=beranda');
            } else if($_POST['tipe']==2) {
                header('location:../staff/index.php?page=beranda');
            } 
        } else {
            header('location:../login/index.php?page=login');
        }
    }
?>