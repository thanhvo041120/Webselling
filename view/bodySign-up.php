<div class="cotainer-fluid">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-3 justify-content-center">
      <div class="card h-90 text-center mb-5 border border-dark" style="background: rgba(237, 242, 247, 0.7);">
        <form action="Operate/HandleForSign-up.php" class="card-body" method="post">
          Username:<br>
          <input type="text" name="username" id="username" placeholder="Enter Username" require />
          <p class="text-danger d-inline">*</p><br>
          Password:<br>
          <input type="password" placeholder="Enter Password" name="password" id="password" require />
          <p class="text-danger d-inline">*</p><br>
          Email:<br>
          <input type="email" placeholder="Enter Email" name="email" id="email" require />
          <p class="text-danger d-inline">*</p><br><br>
          <input type="submit" style="background-image: linear-gradient(to right,rgb(42, 44, 47,1), rgb(100, 108, 108,1)) !important" class="btn btn-small btn-secondary justify-content-center" value="Sign-up" />
        </form>
      </div>
    </div>
  </div>
</div>