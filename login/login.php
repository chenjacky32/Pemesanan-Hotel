<center>
<div class="text-light">
          <div class="col-lg-10 pt-10">
          <div class="hero-banner__content">
              <h2>Welcome To HOTEL SABRINA</h2>
            </div>
            <div>

            <div class="row mt-9">
                <div class="col-12">
                <form method="post" action="loginaksi.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Akses</label>
                            <select class="form-control" name="tipe">
                                <option selected disabled>-- </option>
                                <option value='1'>Admin</option>
                                <option value='2'>staff</option>
                            </select>
                        </div>
                            <button type="submit" class="btn btn-primary" name="loginaksi">Login</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </form>
                    </div>
</center>
                            