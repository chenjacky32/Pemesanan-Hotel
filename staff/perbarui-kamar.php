<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from kamar where kode_kamar='".$id."'");
$d = mysqli_fetch_array($data);
?>

<h2>Perbarui Data Staff</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post"action="kamar-aksi.php">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Kode Kamar</label>
                        <input type="text" class="form-control" value="<?php echo $d['kode_kamar']; ?>" disabled>
                        <input type="hidden" name="kode_kamar" value="<?php echo $d['kode_kamar']; ?>">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label>No Kamar</label>
                        <input type="text" class="form-control" name="no_kamar" placeholder="Nomor Kamar" value="<?php echo $d['no_kamar']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
                <label>Jenis Kamar</label>
                <input type="text" class="form-control" name="jenis_kamar" placeholder="Jenis Kamar" value="<?php echo $d['jenis_kamar']; ?>">
        </div>
        <div class="form-group">
            <label>Harga Kamar</label>
            <input type="text" class="form-control" name="harga_kamar" placeholder="Harga Kamar" value="<?php echo $d['harga_kamar']; ?>">
        </div>
<button type="submit" class="btn btn-primary" name="perbarui_kamar">Perbarui Data</button>
<button type="reset" class="btn btn-secondary">Batal</button>
        </form>
    </div>
</div>
