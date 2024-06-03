<?php
  $koneksi = mysqli_connect("localhost","root","","hotel");
  if(mysqli_connect_errno()) {
      echo"koneksi gagal : ".mysqli_connect_errno();
  }
  ?>
  <h2> Welcome to the HOTEL SABRINA</h2>

<div class="row mt-4">
    <div class="col">
        <div class="card bg-info text-white">
            <div class="card-header text-centre py-1">
                <h5>Jumlah Customer</h5>
            </div>
            <div class="crad-body text-centre">
            <?php   
                $customer = mysqli_query($koneksi,"select * from customer");
                $tcustomer= mysqli_num_rows($customer);
                echo '<h1>'.$tcustomer.'Orang<h1>';
             ?>
            </div>
            <div class="card-footer text-right p-0">
                <a href="?page=customer" class="btn btn-link text-white">klik disini</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-success">
            <div class="card-header text-centre py-1">
                <h5>Jumlah Kamar</h5>
            </div>
            <div class="crad-body text-centre">
            <?php   
                $kamar = mysqli_query($koneksi,"select * from kamar");
                $tkamar= mysqli_num_rows($kamar);
                echo '<h1>'.$tkamar.'Ruang<h1>';
             ?>
            </div>
            <div class="card-footer text-right p-0">
                <a href="?page=kamar" class="btn btn-link text-white">klik disini</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-warning">
            <div class="card-header text-centre py-1">
                <h5>Jumlah Staff</h5>
            </div>
            <div class="crad-body text-centre">
            <?php   
                $staff = mysqli_query($koneksi,"select * from staff");
                $tstaff= mysqli_num_rows($staff);
                echo '<h1>'.$tstaff.'orang<h1>';
             ?>
            </div>
            <div class="card-footer text-right p-0">
                <a href="?page=data-staff" class="btn btn-link text-white">klik disini</a>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

