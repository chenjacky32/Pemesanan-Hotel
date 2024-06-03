<h2>Tambah Data Staff</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post"action="staff-aksi.php">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Id Staff</label>
                        <input type="text" class="form-control" name="id_staff" placeholder="Id Staff">
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label>Nama Staff</label>
                    <input type="text" class="form-control" name="nama_staff" placeholder="Nama Staff">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
         </div>
        <div class="form-group">
            <label>Nomor Kontak</label>
            <input type="text" class="form-control" name="nomor_kontak" placeholder="Nomor Kontak">
        </div>
        <div class="form-group"> 
            <label>Alamat Email</label>
            <input type="text" class="form-control" name="alamat_email" placeholder="Alamat Email">
        </div>
        <button type="submit" class="btn btn-primary" name="tambah_staff">Tambah Staff</button>
        <button type="reset" class="btn btn-secondary">Batal</button>
        <a href="?page=data-staff" class="btn btn-danger">Back</a>
        </form>
    </div>
</div>
<br>




