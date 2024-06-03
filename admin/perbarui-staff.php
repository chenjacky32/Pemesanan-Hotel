<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from staff where id_staff='".$id."'");
$d = mysqli_fetch_array($data);
?>

<h2>Perbarui Data Staff</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post"action="staff-aksi.php">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Id Staff</label>
                        <input type="text" class="form-control" value="<?php echo $d['id_staff']; ?>" disabled>
                        <input type="hidden" name="id_staff" value="<?php echo $d['id_staff']; ?>">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Nama Staff</label>
                        <input type="text" class="form-control" name="nama_staff" placeholder="Nama Staff" value="<?php echo $d['nama_staff']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $d['tempat_lahir']; ?>">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $d['tanggal_lahir']; ?>">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $d['alamat']; ?>">
        </div>
        <div class="form-group">
            <label>Nomor Kontak</label>
            <input type="text" class="form-control" name="nomor_kontak" placeholder="Nomor Kontak" value="<?php echo $d['nomor_kontak']; ?>">
        </div>
        <div class="form-group"> 
            <label>Alamat Email</label>
            <input type="text" class="form-control" name="alamat_email" placeholder="Alamat Email" value="<?php echo $d['alamat_email']; ?>">
        </div>
<button type="submit" class="btn btn-primary" name="perbarui_staff">Perbarui Data</button>
<button type="reset" class="btn btn-secondary">Batal</button>
<a href="?page=data-staff" class="btn btn-danger">Back</a>
        </form>
    </div>
</div>
<br>
