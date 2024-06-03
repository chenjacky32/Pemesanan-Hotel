<h3><center>History Pembelian</center></h3>
<div class="row mt-4">
    <div class="col-md-12">
    <a href="cetakpembelian.php" class="btn btn-succes mb-3">Cetak Laporan</a>
    <a href="?page=data-staff" class="btn btn-danger">Back</a>
        <table class="table table-info table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No Transaksi</th>
                    <th>No PO</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no=1; 
                $data = mysqli_query($koneksi, "select*from transaksi_pembelian_hotel");
                while($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['no_transaksi']; ?></td>
                    <td><?php echo $d['no_po']; ?></td>
                    <td><?php echo $d['nama_supplier']; ?></td>
                    <td><?php echo $d['nama_barang']; ?></td>
                    <td><?php echo $d['harga_barang']; ?></td>
                    <td><?php echo $d['jumlah_barang']; ?></td>
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
<br><br>
<br><br>
<br><br>
<br>
<br>
<br>
<br>
<br>