<h2>Data Customer</h2>

<div class="row">
<div class="col-md-10">   
    <div class="col-md-12">
<table class="table table-info table-striped">
<a href="cetakcustomer.php" class="btn btn-succes mb-3">Cetak Laporan</a>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Customer</th>
            <th>Tempat lahir/Tanggal lahir</th>
            <th>Alamat</th>
            <th>Nomor kontak</th>
            <th>Alamat email</th>
           
        </tr>
    </thead>
<tbody>
<?php
 $data= mysqli_query($koneksi, "select*from customer");
 while($d =  mysqli_fetch_array($data)) {
?>
    <tr>
            <td><?php echo $d['id_customer'];?></td>
            <td><?php echo $d['nama_customer'];?></td>
            <td><?php echo $d['tempat_lahir'].' / '.$d['tanggal_lahir'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['nomor_kontak'];?></td>
            <td><?php echo $d['alamat_email'];?></td>
        </tr>
<?php
 }
 ?>
    
    </tbody>
</table>
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
<br>
<br>
<br>
<br>
<br>
<br>
