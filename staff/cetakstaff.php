<!DOCTYPE html>
<html>
<body>
	<center>
 		<h2>DATA LAPORAN STAFF HOTEL SABRINA</h2>
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
            <th>Nama Staff</th>
            <th>Tempat lahir/Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor kontak</th>
            <th>Alamat email</th>
                </tr>
            </thead>
            <tbody>
            <?php
                     $no=1; 
                     $data = mysqli_query($koneksi, "select*from staff");
                     while($d = mysqli_fetch_array($data)) {
            ?>
                     <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['id_staff'];?></td>
            <td><?php echo $d['nama_staff'];?></td>
            <td><?php echo $d['tempat_lahir'].' / '.$d['tanggal_lahir'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['nomor_kontak'];?></td>
            <td><?php echo $d['alamat_email'];?></td>
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