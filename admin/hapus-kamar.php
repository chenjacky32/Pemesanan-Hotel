<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from kamar where kode_kamar='".$id."'");
$d = mysqli_fetch_array($data);
?>

<h2> Hapus Data Staff </h2>
<div class="row mt-4">
    <div class="col-md-5">
        <div class=" card card-body">
            Anda Yakin akan Menghapus Data? <b><?php echo $d['no_kamar']; ?></b>
                <form method="post" action="kamar-aksi.php">
                <input type="hidden" name="kode_kamar" value="<?php echo $d['kode_kamar']; ?>">   
                <button type="submit" class="btn btn-primary" name="hapus-kamar">Hapus Data</button>
                <a href="?page=kamar" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>