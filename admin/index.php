<?php
    session_start();
    if(isset($_SESSION['username'])) {
        $koneksi = mysqli_connect("localhost","root","","hotel");
        if(mysqli_connect_errno()) {
            echo "Koneksi Gagal : ".mysqli_connect_errno();
        }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>HOTEL SABRINA</title>
    
        <link rel="icon" href="../img/download.jpg" type="image/jpg">
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-primary">
                <a class="navbar-brand" href="#">HOTEL SABRINA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="?page=beranda">Beranda</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="?page=customer">Customer</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="?page=kamar">kamar</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="?page=data-staff">Staff</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="?page=history">History</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="?page=logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main role="main">

            <div class="mt-5 py-5">
                <div class="container">
                <?php
                    if(isset($_GET['page'])) {
                        switch($_GET['page']) {
                            case 'beranda';
                            include('beranda.php');
                            break;
                            case 'data-staff';
                            include('data-staff.php');
                            break;
                            case 'tambah-staff';
                            include('tambah-staff.php');
                            break;
                            case 'hapus-staff';
                            include('hapus-staff.php');
                            break;
                            case 'perbarui-staff';
                            include('perbarui-staff.php');
                            break;
                            case 'kamar';
                            include('kamar.php');
                            break;
                            case 'kamar-aksi';
                            include('kamar-aksi.php');
                            break;
                            case 'tambah-kamar';
                            include('tambah-kamar.php');
                            break;
                            case 'perbarui-kamar';
                            include('perbarui-kamar.php');
                            break;
                            case 'hapus-kamar';
                            include('hapus-kamar.php');
                            break;
                            case 'customer';
                            include('customer.php');
                            break;
                            case 'cetakcustomer';
                            include('cetakcustomer.php');
                            break;
                            case 'history';
                            include('history.php');
                            break;
                            case 'sewakamar';
                            include('sewakamar.php');
                            break; 
                            case 'pembelian';
                            include('pembelian.php');
                            break;
                            case 'logout';
                            include('logout.php');
                            break;
                        }
                    }
            ?>
                </div>
            </div>

        </main>

        <footer class="text-muted bg-light">
            <div class="container">
                <p>&copy; HOTEL SABRINA, 2021.</p>
            </div>
        </footer>

        <script src="../js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/holder.min.js"></script>
    </body>
</html>
<?php
    } else {
        header('location: ../login/index.php?page=login');   
    }
?>