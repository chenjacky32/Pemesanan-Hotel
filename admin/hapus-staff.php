<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from staff where id_staff='".$id."'");
$d = mysqli_fetch_array($data);
?>

<h2> Hapus Data Staff </h2>
<div class="row mt-4">
    <div class="col-md-5">
        <div class=" card card-body">
            Anda Yakin akan Menghapus Data <b><?php echo $d['nama_staff']; ?></b>
                <form method="post" action="staff-aksi.php">
                <input type="hidden" name="id_staff" value="<?php echo $d['id_staff']; ?>">   
                <input type="hidden" name="username" value="<?php echo $d['alamat_email']; ?>">
                <button type="submit" class="btn btn-primary" name="hapus-staff">Hapus Data</button>
                <a href="?page=data-staff" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>