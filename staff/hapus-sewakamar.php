<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from transaksi_sewa_kamar where no_transaksi='".$id."'");
$d = mysqli_fetch_array($data);
?>

<h2> Hapus Data Customer </h2>
<div class="row mt-4">
    <div class="col-md-5">
        <div class=" card card-body">
            Anda Yakin akan Menghapus Data? <b><?php echo $d['no_transaksi']; ?></b>
                <form method="post" action="sewa-aksi.php">
                <input type="hidden" name="no_transaksi" value="<?php echo $d['no_transaksi']; ?>">   
                <button type="submit" class="btn btn-primary" name="hapussewa">Hapus Data</button>
                <a href="?page=sewakamar" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>