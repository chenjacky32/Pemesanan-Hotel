<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from customer where id_customer='".$id."'");
$d = mysqli_fetch_array($data);
?>

<h2> Hapus Data Customer </h2>
<div class="row mt-4">
    <div class="col-md-5">
        <div class=" card card-body">
            Anda Yakin akan Menghapus Data? <b><?php echo $d['id_customer']; ?></b>
                <form method="post" action="customer-aksi.php">
                <input type="hidden" name="id_customer" value="<?php echo $d['id_customer']; ?>">   
                <button type="submit" class="btn btn-primary" name="hapuscust">Hapus Data</button>
                <a href="?page=customer" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>