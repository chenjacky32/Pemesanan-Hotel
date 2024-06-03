<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from customer where id_customer='".$id."'");
$d = mysqli_fetch_array($data);
?>

<h2>Perbarui Data Customer</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post"action="customer-aksi.php">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Id Customer</label>
                        <input type="text" class="form-control" value="<?php echo $d['id_customer']; ?>" disabled>
                        <input type="hidden" name="id_customer" value="<?php echo $d['id_customer']; ?>">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <input type="text" class="form-control" name="nama_customer" placeholder="Nama Customer" value="<?php echo $d['nama_customer']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" value="<?php echo $d['tempat_lahir']; ?>">
        </div>
        <div class="form-group">
            <label>tanggal_lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $d['tanggal_lahir']; ?>">
        </div>
        <div class="form-group">
            <label>alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $d['alamat']; ?>">
        </div>
        <div class="form-group">
            <label>Nomor kontak</label>
            <input type="text" class="form-control" name="nomor_kontak" placeholder="Nomor kontak" value="<?php echo $d['nomor_kontak']; ?>">
        </div>
        <div class="form-group">
            <label>Alamat email</label>
            <input type="text" class="form-control" name="alamat_email" placeholder="Alamat email" value="<?php echo $d['alamat_email']; ?>">
        </div>
<button type="submit" class="btn btn-primary" name="perbaruicust">Perbarui Data</button>
<button type="reset" class="btn btn-secondary">Batal</button>
<a href="?page=customer" class="btn btn-danger">Back</a>
        </form>
    </div>
</div>
<br>

