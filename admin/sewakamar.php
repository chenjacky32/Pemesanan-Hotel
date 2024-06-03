<h3><center>History Sewa Kamar</center></h3>
<div class="row mt-4">
    <div class="col-md-12">
    <a href="cetakkmr.php" class="btn btn-succes mb-3">Cetak Laporan</a>
    <a href="?page=data-staff" class="btn btn-danger">Back</a>
        <table class="table table-info table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No Transaksi</th>
                    <th>Kode Kamar</th>
                    <th>Nomor Kamar</th>
                    <th>Jenis Kamar</th>
                    <th>Harga</th>
                    <th>Jumlah Hari</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no=1; 
                $data = mysqli_query($koneksi, "select*from transaksi_sewa_kamar");
                while($d = mysqli_fetch_array($data)) {
                    $total=($d['jumlah']*$d['harga']);
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['no_transaksi']; ?></td>
                    <td><?php echo $d['kode_kamar']; ?></td>
                    <td><?php echo $d['no_kamar']; ?></td>
                    <td><?php echo $d['jenis_kamar']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td><?php echo $d['jumlah']; ?></td>
                    <td><?php echo $d['tgl_checkin']; ?></td>
                    <td><?php echo $d['tgl_checkout']; ?></td>
                    <td><?php echo $total; ?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>