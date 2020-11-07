<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-3 justify-content-center mb-5">
      <div style="background: rgba(237, 242, 247, 0.7);" class="card h-80 text-center mb-5">
        <div class="card-img-top border border-dark">
          <img src="img/Logologin.jpg" style="width: 50px" alt="login">
        </div>
        <form action="Operate/HandleForLog-in.php" class="card-body border border-top-0 border-dark" method="post">
          Username:<br>
          <input type="text" name="username" id="username" placeholder="Enter Username" method_exists />
          <p class=" text-danger d-inline">*</p><br><br>
          Password:<br>
          <input type="password" placeholder="Enter Password" name="password" id="password" method_exists />
          <p class=" text-danger d-inline ">*</p><br><br>
          <button type="submit" style="background-image: linear-gradient(to right,rgb(42, 44, 47,1), rgb(100, 108, 108,1)) !important" class="btn btn-secondary text-white">
            Login
          </button>
          <input type="checkbox" name="remember">Remember me
        </form>
      </div>
      <?php if (isset($_GET['isAuth'])) { ?>
        <?php if ($_GET['isAuth'] == "false") { ?>
          <p class="alert alert-danger text-center justify-content-center ">Password or Username is incorrect</p>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>