<h2>Data Kamar</h2>

<div class="row">
<div class="col-md-10">   
    <div class="col-md-12">
    <a href="?page=tambah-kamar" class="btn btn-primary mb-2">+</a>
    <a href="cetakkamar.php" class="btn btn-succes mb-3">Cetak Laporan</a>
    <table class="table table-info table-striped">
    
    <thead>
        <tr>
            <th>#</th>
            <th>Nomor Kamar</th>
            <th>Jenis</th>
            <th>Harga Kamar</th>
            <th colspan=2>Aksi</th>
        </tr>
    </thead>
<tbody>
<?php
 $data= mysqli_query($koneksi, "select*from kamar");
 while($d =  mysqli_fetch_array($data)) {
?>
    <tr>
            <td><?php echo $d['kode_kamar'];?></td>
            <td><?php echo $d['no_kamar'];?></td>
            <td><?php echo $d['jenis_kamar'];?></td>
            <td><?php echo $d['harga_kamar'];?></td>
            <td><a href="?page=perbarui-kamar&id=<?php echo $d['kode_kamar'];?>" class="btn btn-sm btn-warning">Perbarui</a></td>
            <td><a href="?page=hapus-kamar&id=<?php echo $d['kode_kamar'];?>" class="btn btn-sm btn-danger">Hapus</a></td>
        </tr>
<?php
 }
 ?>
    
    </tbody>
</table>

