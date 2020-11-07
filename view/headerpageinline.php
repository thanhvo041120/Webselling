<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
        <div class="col-2">
          <div class="d-flex justify-content-center">
            <a class="navbar-brand mr-5" href="logout.php">
              <img class="border border-warning" src="img/Logo.jpg" style="width: 80px" alt="Logo" /></a>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-10">
          <div class="row">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <div class="col-4">
                <div class="d-flex justify-content-center">
                  <<form class="form-inline" action="database/search.php" method="post">
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
                  <ul class="navbar-nav nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Home</a>
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
              <div class="col-2">
                <div class="d-flex justify-content-center">
                  <button type="button" class="navbar btn btn-danger btn-xl ml-5" data-toggle="modal" data-target="#myModal">
                    <em class="fa fa-shopping-basket"> </em>
                  </button>
                </div>
              </div>
              <div class="col-2">
                <div class="d-flex justify-content-center">
                  <form action="Operate/Log-out.php" class="navbar ml-5">
                    <button type="submit" class="btn btn-dark  justify-content-center">
                      Log-out<em style="font-size:24px" class="fa justify-content-center">&#xf2bd; </em>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

