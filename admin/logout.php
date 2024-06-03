<h2>Keluar Sistem? </h2>

<div class="row mt-4">
<div class="col-md-5">
    Yakin ingin keluar dari HOTEL SABRINA?</p>
    <form method="post" action="">
            <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
            <button type="submit" name="logout" class="btn btn-primary"> Ya</button>
            <a href="?page=beranda" class="btn btn-secondary"> Batal</a>
        </form> 
    </div >
</div>

<?php
    if(isset($_POST['logout'])) {
        session_unset();
    }
?>