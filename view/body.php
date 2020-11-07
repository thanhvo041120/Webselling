<?php

$servername = "localhost";
$username = "root";
$password = null;
$dbname = "watch";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "Select * from post where description NOT LIKE 'a' Order by giabinhthuong desc limit 9 ";
$query = mysqli_query($conn, $sql);


?>
<div class="container pt-xl-5">

  <div class="row pt-xl-5">

    <div class=" col col-xl-3" id="content-service">
      <h1 class="h1 my-xl-4 mt-xl-1 text-white">Watch-Luxury</h1>
      <div class=" list-group">
        <a href="#" style="background: rgba(237, 242, 247, 0.9)" class="list-group-item text-dark">For Man</a>
        <a href="#" style="background: rgba(237, 242, 247, 0.9)" class="list-group-item text-dark">For Woman</a>
        <a href="#" style="background: rgba(237, 242, 247, 0.9)" class="list-group-item text-dark">For Couple</a>
      </div>
    </div>
    <!-- /.col-lg-3 -->

    <div class="col col-lg-9">

      <div id="carouselExampleIndicators" class="carousel slide my-4 mt-2" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active picture">
            <img class="d-block img-fluid" src="img/Intro/pic1.jpg" alt="First slide">
          </div>
          <div class="carousel-item picture">
            <img class="d-block img-fluid" src="img/Intro/pic2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item picture">
            <img class="d-block img-fluid" src="img/Intro/pic3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item picture">
            <img class="d-block img-fluid" src="img/Intro/pic4.jpg" alt="Fourth-slide">
          </div>
          <div class="carousel-item picture">
            <img class="d-block img-fluid" src="img/Intro/pic5.jpg" alt="Fifth-slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- col -lg-9 -->
      <div class="row">
        <?php
        while ($row = mysqli_fetch_assoc($query)) { ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border border-dark" style="background: rgba(237, 242, 247, 0.8);">
              <?php if (isset($_GET['isAuth'])) { ?>
                <?php if ($_GET['isAuth'] == "true") { ?>
                  <button data-toggle="modal" data-target="#myModal">
                    <img style="opacity: 0.9" src="img/Mantypes/<?php echo $row["anhmattruoc"] ?>" class="card-img-top" alt="">
                  </button>
                  <div class="card-body border-top border-bottom border-dark">
                    <h4 class="card-title">
                      <a data-toggle="modal" data-target="#myModal" class="text-danger"><?php echo $row["name"] ?> </a>
                    </h4>
                    <h5><?php echo $row["giabinhthuong"] ?></h5>
                    <p class="card-text"><?php echo $row["description"] ?></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-dark">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                  </div>
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header justify-content-center text-danger text-center">
                          <h4 class="h2 modal-title">Shopping-cart</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <tb>
                            <tr>
                              <td><?php echo $row["name"] ?></td>
                              <td><?php echo $row["description"] ?></td>
                              <td><?php echo $row["giabinhthuong"] ?></td>
                            </tr>
                          </tb>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } else { ?>
                <a href="log-in.php">
                  <img style="opacity: 0.9" src="img/Mantypes/<?php echo $row["anhmattruoc"] ?>" class="card-img-top" alt="">
                </a>
                <div class="card-body border-top border-bottom border-dark">
                  <h4 class="card-title">
                    <a class="text-danger" href="log-in.php"><?php echo $row["name"] ?> </a>
                  </h4>
                  <h5><?php echo $row["giabinhthuong"] ?></h5>
                  <p class="card-text"><?php echo $row["description"] ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-dark">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              <?php } ?>
            </div>
          </div>
        <?php }  ?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->