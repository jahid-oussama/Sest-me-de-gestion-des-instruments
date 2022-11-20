<?php
include 'script.php';
$strings = getProducts(1);
$winds = getProducts(2);
$percussions = getProducts(3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <!-- CSS only -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  <title>Document</title>
</head>

<body>
  <!-- nav bar  -->
  <header class="p-3 mb-3 border-bottom text-bg-dark">

    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <!-- toggler button for menu-->
        <button class="btn " data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
          <i class="bi bi-list fs-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"></i>
        </button>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
          <li><a href="#" class="nav-link px-2 text-white">chi7aja</a></li>
          <li><a href="#" class="nav-link px-2 text-white">chi7aja</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Products</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://media-exp1.licdn.com/dms/image/D5603AQFHWU_JzXonGw/profile-displayphoto-shrink_200_200/0/1667834285999?e=1673481600&v=beta&t=3OgKdFNpM9YiLj1ItrrtGM50ItAlIBcfNeNoUao_eH8" alt="mdo" width="32" height="32" class="rounded-circle">
            <span class="d-none d-sm-inline mx-1 text-white"> <?php echo $_SESSION["name"] ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- nav bar  -->

  <!-- side bar  -->


  <div class="offcanvas offcanvas-start w-25" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
    <div class="offcanvas-header text-bg-dark">
      <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas">Menu</h6>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0 text-bg-dark ">
      <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start " id="menu">
        <li class="nav-item">
          <a href="#" class="nav-link text-truncate text-white">
            <i class="fs-5 bi-house "></i><span class="ms-1 d-none d-sm-inline ">Home</span>
          </a>
        </li>
        <li>
          <a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-truncate text-white">
            <i class="fs-5 bi-speedometer2 text-white"></i><span class="ms-1 d-none d-sm-inline ">chi7aja</span> </a>
        </li>
        <li>
          <a href="#" class="nav-link text-truncate text-white">
            <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">chi7aja</span></a>
        </li>
        <li class="dropdown ">
          <a href="#" class="nav-link dropdown-toggle  text-truncate text-white" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline ">chi7aja</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow " aria-labelledby="dropdown">
            <li><a class="dropdown-item " href="#">chi7aja</a></li>
            <li><a class="dropdown-item" href="#">chi7aja</a></li>
            <li><a class="dropdown-item" href="#">chi7aja</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="nav-link text-truncate text-white">
            <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline ">chi7aja</span></a>
        </li>
        <li>
          <a href="#" class="nav-link text-truncate text-white">
            <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">chi7aja</span> </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- side bar / -->

  <!-- item section -->


  <section class="h-100 gradient-custom">
    <!-- add button -->
    <div class="container py-5">
      <div class="d-flex align-items-end ">
        <div class="ms-auto">
          <a href="#modal-product" onclick="clear_product()" data-bs-toggle="modal" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add product</a>
        </div>
      </div>
      <!-- add button -->


      <div class="row d-flex justify-content-center my-4 ">

        <div class="col-lg-4 col-md-6 col-sm-6 ">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">1-string</h5>
            </div>

            <?php
            //PHP CODE HERE
            foreach ($strings as $product) {

            ?>

              <div class="card-body" id="<?php echo $product['id']  ?>" onclick="get_product(<?php echo $product['id']  ?>)">
                <!-- Single item -->
                <div class="row ">
                  <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                      <div style="width: 100%; height: 300px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(image/products/<?php echo $product['picture']  ?>);">

                      </div>
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p data-product="<?php echo $product['title']  ?>"><strong><?php echo $product['title']  ?></strong></p>
                    <p data-product="<?php echo $product['color']  ?>">Color: <?php echo $product['color']  ?></p>
                    <p data-product="<?php echo $product['description']  ?>" class="text-truncate"><?php echo $product['description']  ?></p>

                    <!-- Quantity -->
                    <div class="form-outline d-flex justify-content-between align-items-center">
                      <label class="form-label" for="form1">Quantity :</label>
                      <input id="form1" min="0" name="quantity" data-product="<?php echo $product['quantity']  ?>" value="<?php echo $product['quantity']  ?>" type="number" class="form-control w-50" />

                    </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-end">
                      <strong data-product="<?php echo $product['prix']  ?>">$<?php echo $product['prix']  ?></strong>
                    </p>
                    <!-- Price -->

                    <!-- Data -->
                    <div data-product="<?php echo $product['category']  ?>">
                    </div>
                    <!-- Data -->
                  </div>
                </div>
                <!-- Single item -->
              </div>
              <hr>
            <?php

            }
            //DATA FROM getproducts() FUNCTION
            ?>
          </div>
        </div>

        <!-- right here second  -->
        <div class="col-lg-4 col-md-6 col-sm-6 ">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">2-Wind</h5>
            </div>

            <?php
            //PHP CODE HERE
            foreach ($winds as $product) {

            ?>

              <div class="card-body" id="<?php echo $product['id']  ?>" onclick="get_product(<?php echo $product['id']  ?>)">
                <!-- Single item -->
                <div class="row ">
                  <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                      <div style="width: 100%; height: 300px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(image/products/<?php echo $product['picture']  ?>);">

                      </div>
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p data-product="<?php echo $product['title']  ?>"><strong><?php echo $product['title']  ?></strong></p>
                    <p data-product="<?php echo $product['color']  ?>">Color: <?php echo $product['color']  ?></p>
                    <p data-product="<?php echo $product['description']  ?>" class="text-truncate"><?php echo $product['description']  ?></p>

                    <!-- Quantity -->
                    <div class="form-outline d-flex justify-content-between align-items-center">
                      <label class="form-label" for="form1">Quantity :</label>
                      <input id="form1" min="0" name="quantity" data-product="<?php echo $product['quantity']  ?>" value="<?php echo $product['quantity']  ?>" type="number" class="form-control w-50" />

                    </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-end">
                      <strong data-product="<?php echo $product['prix']  ?>">$<?php echo $product['prix']  ?></strong>
                    </p>
                    <!-- Price -->

                    <!-- Data -->
                    <div data-product="<?php echo $product['category']  ?>">
                    </div>
                    <!-- Data -->
                  </div>
                </div>
                <!-- Single item -->
              </div>
              <hr>
            <?php

            }
            //DATA FROM getproducts() FUNCTION
            ?>
          </div>
        </div>
        <!-- right here therd  -->
        <div class="col-lg-4 col-md-6 col-sm-6 ">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">3-Percussion</h5>
            </div>

            <?php
            //PHP CODE HERE
            foreach ($percussions as $product) {

            ?>

              <div class="card-body" id="<?php echo $product['id']  ?>" onclick="get_product(<?php echo $product['id']  ?>)">
                <!-- Single item -->
                <div class="row ">
                  <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                      <div style="width: 100%; height: 300px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(image/products/<?php echo $product['picture']  ?>);">

                      </div>
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p data-product="<?php echo $product['title']  ?>"><strong><?php echo $product['title']  ?></strong></p>
                    <p data-product="<?php echo $product['color']  ?>">Color: <?php echo $product['color']  ?></p>
                    <p data-product="<?php echo $product['description']  ?>" class="text-truncate"><?php echo $product['description']  ?></p>

                    <!-- Quantity -->
                    <div class="form-outline d-flex justify-content-between align-items-center">
                      <label class="form-label" for="form1">Quantity :</label>
                      <input id="form1" min="0" name="quantity" class="quantity-pro" data-product="<?php echo $product['quantity']  ?>" value="<?php echo $product['quantity']  ?>" type="number" class="form-control w-50" />

                    </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-end">
                      <strong data-product="<?php echo $product['prix']  ?>">$<?php echo $product['prix']  ?></strong>
                    </p>
                    <!-- Price -->

                    <!-- Data -->
                    <div data-product="<?php echo $product['category']  ?>">
                    </div>
                    <!-- Data -->
                  </div>
                </div>
                <!-- Single item -->
              </div>
              <hr>
            <?php

            }
            //DATA FROM getproducts() FUNCTION
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- item section -->



  <!-- product MODAL -->
  <div class="modal fade" id="modal-product" data-parsley-validate>
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="script.php" method="POST" id="form-product" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title">Add product</h5>
            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
          </div>
          <div class="modal-body">
            <!-- This Input Allows Storing product Index  -->
            <input type="hidden" name="product-id" id="product-id">
            <div class="mb-3">
              <label class="form-label">Category</label>
              <select class="form-select" name="category" id="product-category" required>
                <option value="">Please select</option>
                <option value="1">string</option>
                <option value="2">Wind</option>
                <option value="3">Percussion</option>
              </select>
            </div>
            <input type="file" name="file">
            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="product-title" required />
            </div>

            <!-- color -->
            <div class="mb-3">
              <label class="form-label">Color</label>
              <input type="text" class="form-control" name="color" id="product-color" required />
            </div>
            <!-- quantity  -->
            <div class="mb-3">
              <label class="form-label">Quantity</label>
              <input type="number" class="form-control" name="quantity" id="product-quantity" required />
            </div>

            <!-- prix -->
            <div class="mb-3">
              <label class="form-label">Prix</label>
              <input type="number" class="form-control" name="prix" id="product-prix" required />
            </div>
            <div class="mb-0">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="10" name="description" id="product-description"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
            <button type="submit" name="delete" class="btn btn-danger product-action-btn" id="product-delete-btn">Delete</a>
              <button type="submit" name="update" class="btn btn-warning product-action-btn" id="product-update-btn">Update</a>
                <button type="submit" name="save" class="btn btn-primary product-action-btn" id="product-save-btn">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>






  <!-- footer -->
  <div class="container-fluid p-0 m-0">

    <footer class="text-white text-center text-lg-start" style="background-color: #23242a;">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">About company</h5>

            <p>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
              voluptatum deleniti atque corrupti.
            </p>

            <p>
              Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
              molestias.
            </p>

            <div class="mt-4">
              <!-- Facebook -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-facebook-f"></i></a>
              <!-- Dribbble -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-dribbble"></i></a>
              <!-- Twitter -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-twitter"></i></a>
              <!-- Google + -->
              <a type="button" class="btn btn-floating btn-warning btn-lg"><i class="fab fa-google-plus-g"></i></a>
              <!-- Linkedin -->
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

            <div class="form-outline form-white mb-4">
              <input type="text" id="formControlLg" class="form-control form-control-lg">
              <label class="form-label" for="formControlLg" style="margin-left: 0px;">Search</label>
              <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 48.8px;"></div>
                <div class="form-notch-trailing"></div>
              </div>
            </div>

            <ul class="fa-ul" style="margin-left: 1.65em;">
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-home "></i></span><span class="ms-2 "><a href="https://goo.gl/maps/BCjWkyBE2ReadALe9" class="text-white text-decoration-none"> Youssoufia,École YOUCODE</a></span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">jaid20oussama@gmail.com</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+212 617071448</span>
              </li>
              <li class="mb-3">
                <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+212 660-941945</span>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Opening hours</h5>

            <table class="table text-center text-white">
              <tbody class="font-weight-normal">
                <tr>
                  <td>Mon - Fri:</td>
                  <td>9am - 5:30pm</td>
                </tr>
                <tr>
                  <td>Sat - Sund:</td>
                  <td>10am - 3pm</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>

  </div>
  <!-- footer -->








</body>
<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</html>