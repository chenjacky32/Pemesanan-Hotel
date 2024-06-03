<!DOCTYPE html>
<html>
<body>
	<center>
 		<h2>DATA LAPORAN PEMBELIAN HOTEL SABRINA</h2>
		<h4>HOTEL SABRINA</h4>
	</center>
 
<?php
		$koneksi = mysqli_connect("localhost","root","","hotel");
		if(mysqli_connect_errno()) {
		echo "Koneksi Gagal : ".mysqli_connect_errno();
	}
?>

<div class="row mt-4">
    <div class="col-md-12">
        <table class="table table-dark table-striped">
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
	<script>
		window.print();
	</script>
 
</body>
</html>