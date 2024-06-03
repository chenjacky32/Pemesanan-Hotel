<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select*from transaksi_sewa_kamar where no_transaksi='".$id."'");
$d = mysqli_fetch_array($data);
?>
<h2>Perbarui Transaksi Sewa Kamar</h2>

<div class="row mt-12">
    <div class="col-lg-10">
        <form method="post" action="sewa-aksi.php">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                </div>
                <div class="form-group">
                <label>No Transaksi</label>
                <input type="text" class="form-control" value="<?php echo $d['no_transaksi']; ?>" disabled>
                <input type="hidden" name="no_transaksi" value="<?php echo $d['no_transaksi']; ?>">
                </div>
                <div class="form-group">
                        <label>Kode kamar</label>
                        <input type="text" class="form-control" name="kode_kamar" placeholder="" value="<?php echo $d['kode_kamar']; ?>">
            </div>
                   <div class="form-group">
                        <label>Nomor Kamar</label>
                        <input type="text" class="form-control" name="no_kamar" placeholder="" value="<?php echo $d['no_kamar']; ?>">
            </div>
                   <div class="form-group">
                        <label>Jenis Kamar</label>
                        <input type="text" class="form-control" name="jenis_kamar" placeholder="" value="<?php echo $d['jenis_kamar']; ?>">
            </div>
            <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" placeholder="" value="<?php echo $d['harga']; ?>">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah"value="<?php echo $d['jumlah']; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Check In</label>
                <input type="text" class="form-control" name="tgl_checkin" placeholder="" value="<?php echo $d['tgl_checkin']; ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Check Out</label>
                <input type="text" class="form-control" name="tgl_checkout" placeholder="" value="<?php echo $d['tgl_checkout']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="perbaruisewa">Perbarui Data</button>
            <button type="reset" class="btn btn-secondary">Batal</button>
            <a href="?page=sewakamar" class="btn btn-danger">Back</a>
        </form>
    </div>
</div>
</div>
