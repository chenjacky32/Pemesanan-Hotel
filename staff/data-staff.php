<h2>Data Staff</h2>

<div class="row">
<div class="col-md-4">   
    <div class="col-md-12">
    <a href="?page=tambah-staff" class="btn btn-primary mb-2">+</a>
    <a href="cetakstaff.php" class="btn btn-succes mb-3">Cetak Laporan</a>
    <table class="table table-info table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Staff</th>
            <th>Tempat lahir/Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor kontak</th>
            <th>Alamat email</th>
            <th colspan=2>Aksi</th>
        </tr>
    </thead>
<tbody>
<?php
 $data= mysqli_query($koneksi, "select*from staff");
 while($d =  mysqli_fetch_array($data)) {
?>
    <tr>
            <td><?php echo $d['id_staff'];?></td>
            <td><?php echo $d['nama_staff'];?></td>
            <td><?php echo $d['tempat_lahir'].' / '.$d['tanggal_lahir'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['nomor_kontak'];?></td>
            <td><?php echo $d['alamat_email'];?></td>
            <td><a href="?page=perbarui-staff&id=<?php echo $d['id_staff'];?>" class="btn btn-sm btn-warning">Perbarui</a></td>
            <td><a href="?page=hapus-staff&id=<?php echo $d['id_staff'];?>" class="btn btn-sm btn-danger">Hapus</a></td>
            
        </tr>
<?php
 }
 ?>
    
    </tbody>
</table>
