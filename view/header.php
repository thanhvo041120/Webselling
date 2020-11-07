<div class="container-xl">
  <div class="row-xl">
    <div class="col-12">
      <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
        <div class="col-4">
          <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="index.php">
              <img class="border border-warning" src="img/Logo.jpg" style="width: 80px" alt="Logo" />
            </a>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-8">
          <div class="row">
            <div class=" collapse navbar-collapse" id="collapsibleNavbar">
              <div class="col-4">
                <div class="d-flex justify-content-center">
                  <form class="form-inline" action="database/search.php" method="post">
                    <input class="form-control-sm mr-1 rounded-lg" type="search" placeholder="Search" name="Search" />
                    <button class="btn btn-dark" type="submit" onclick="searching()">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-1">
                        <circle cx="10.5" cy="10.5" r="7.5"></circle>
                        <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
              <div class="col-4">
                <div class="d-flex justify-content-center">
                  <ul class="navbar-nav nav-tabs justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#content-service">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-4">
                <div class="d-flex justify-content-center">
                  <div class="dropdown">
                    <button class="btn btn-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <em style="font-size:24px" class="fa justify-content-center">&#xf4ff; </em>
                    </button>
                    <div class="dropdown-menu mt-2 text-center" aria-labelledby="dropdownMenuButton">
                      <h6 class="text-dark dropdown-header">Your account</h6>
                      <div class="d-flex justify-content-center">
                        <a class="dropdown-item col-9 btn border border-dark text-white rounded-sm" style="background-image: linear-gradient(to right,rgb(42, 44, 47,1), rgb(100, 108, 108,1)) !important" href="log-in.php" class="mr-3">Log-in</a>
                      </div>
                      <div class="d-flex justify-content-center">
                        <a class="dropdown-item col-9 btn border border-secondary background-2 text-white rounded-sm mt-1" style="background-image: linear-gradient(to left,rgb(42, 44, 47,0.9), rgb(100, 108, 108,0.9)) !important" href="sign-up.php">Sign-up</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>