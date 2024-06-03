<!DOCTYPE html>
<html>
<body>
	<center>
 		<h2>DATA LAPORAN KAMAR HOTEL SABRINA</h2>
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
            <th>Nomor Kamar</th>
            <th>Jenis</th>
            <th>Harga Kamar</th>
                </tr>
            </thead>
            <tbody>
            <?php
                     $no=1; 
                     $data = mysqli_query($koneksi, "select*from kamar");
                     while($d = mysqli_fetch_array($data)) {
            ?>
                     <tr>
                     <td><?php echo $d['kode_kamar'];?></td>
                     <td><?php echo $d['no_kamar'];?></td>
                     <td><?php echo $d['jenis_kamar'];?></td>
                     <td><?php echo $d['harga_kamar'];?></td>
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