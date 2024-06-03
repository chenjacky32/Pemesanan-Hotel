<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>HOTEL SABRINA</title>

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
                            <a class="nav-link" href="index.php?page=home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=login">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="jumbotron">
            <div class="container">
        

        <main role="main">

            <div class="mt-5 py-5">
                <div class="container">
            <?php
                    if(isset($_GET['page'])) {
                        switch($_GET['page']) {
                            case 'home';
                            include('home.php');
                            break;
                            case 'login';
                            include('login.php');
                            break;
                        }
                    }
            ?>
                </div>
            </div>
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
