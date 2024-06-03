<h2>Transaksi Sewa Kamar</h2>

<div class="row mt-12">
    <div class="col-lg-10">
        <form method="post" action="sewa-aksi.php">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                </div>
                <div class="form-group">
                <label>No Transaksi</label>
                <input type="text" class="form-control" name="no_transaksi" placeholder="No Transaksi">
                </div>
                <div class="form-group">
                        <label>Kode kamar</label>
                        <select class="form-control" name="kode_kamar">
                            <option selected disabled>-- Pilih</option>
                        <?php
                            $data = mysqli_query($koneksi, "select*from kamar");
                            while($d = mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?php echo $d['kode_kamar']; ?>"><?php echo $d['kode_kamar']; ?></option>
                        <?php
                            }
                        ?>
                        </select>
            </div>
                   <div class="form-group">
                        <label>Nomor Kamar</label>
                        <select class="form-control" name="no_kamar">
                            <option selected disabled>-- Pilih</option>
                        <?php
                            $data = mysqli_query($koneksi, "select*from kamar");
                            while($d = mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?php echo $d['no_kamar']; ?>"><?php echo $d['no_kamar']; ?></option>
                        <?php
                            }
                        ?>
                        </select>
            </div>
                   <div class="form-group">
                        <label>Jenis Kamar</label>
                        <select class="form-control" name="jenis_kamar">
                            <option selected disabled>-- Pilih</option>
                        <?php
                            $data = mysqli_query($koneksi, "select*from kamar");
                            while($d = mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?php echo $d['jenis_kamar']; ?>"><?php echo $d['jenis_kamar']; ?></option>
                        <?php
                            }
                        ?>
                        </select>
            </div>
            <div class="form-group">
            <label>Harga</label>
                <select class="form-control" name="harga_kamar">
                        <option selected disabled>-- Pilih</option>
                    <?php
                        $data = mysqli_query($koneksi, "select*from kamar");
                        while($d = mysqli_fetch_array($data)) {
                    ?>
                        <option value="<?php echo $d['harga_kamar']; ?>"><?php echo $d['harga_kamar']; ?></option>
                    <?php
                        }
                    ?>
                    </select>
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
            </div>
            <div class="form-group">
                <label>Tanggal Check In</label>
                <input type="date" class="form-control" name="tgl_checkin" placeholder="">
            </div>
            <div class="form-group">
                <label>Tanggal Check Out</label>
                <input type="date" class="form-control" name="tgl_checkout" placeholder="">
            </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="sewa_kamar">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                        <a href="?page=sewakamar" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>