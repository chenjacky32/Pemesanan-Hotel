<h2>Tambah Data Customer</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post"action="customer-aksi.php">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Id Customer</label>
                        <input type="text" class="form-control" name="id_customer" placeholder="Id Customer">
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label>Nama Customer</label>
                    <input type="text" class="form-control" name="nama_customer" placeholder="Nama Customer">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Tempat lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir">
        </div>
        <div class="form-group">
            <label>Tanggal lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal lahir">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
        </div>
        <div class="form-group">
            <label>Nomor kontak</label>
            <input type="text" class="form-control" name="nomor_kontak" placeholder="Nomor kontak">
        </div>
        <div class="form-group">
            <label>Alamat email</label>
            <input type="text" class="form-control" name="alamat_email" placeholder="Alamat email">
        </div>
        <button type="submit" class="btn btn-primary" name="tambahcust">Tambah Customer</button>
        <button type="reset" class="btn btn-secondary">Batal</button>
        <a href="?page=customer" class="btn btn-danger">Back</a>
        </form>
    </div>
</div>
<br>