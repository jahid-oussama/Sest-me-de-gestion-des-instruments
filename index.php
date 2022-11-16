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
                <span class="d-none d-sm-inline mx-1 text-white">jahid oussama</span>
            </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
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
                <a href="#modal-task" onclick="clear_task()" data-bs-toggle="modal" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Task</a>
            </div>
        </div>
                          <!-- add button -->

                          
          <div class="row d-flex justify-content-center my-4 ">
            <div class="col-lg-4 col-md-6 col-sm-6 ">
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h5 class="mb-0">1-string</h5>
                </div>
                <div class="card-body">
                  <!-- Single item -->
                  <div class="row ">
                    <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d" >
                      <!-- Image -->
                      <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                          <div style="width: 100%; height: 300px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://miro.medium.com/max/1000/0*MFYpYMw1G2Qk1gks.jpg);">

                        </div>
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                      </div>
                      <!-- Image -->
                    </div>
      
                    <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                      <!-- Data -->
                      <p><strong>Classical Guitar</strong></p>
                      <p>Color: provincial</p>
                      <p class="text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, provident minima! Deserunt nemo illo suscipit id dicta laudantium accusamus alias officia iure quaerat, minus inventore repellat minima, adipisci corporis ab.</p>

                      <!-- Quantity -->
                       <div class="form-outline d-flex justify-content-between align-items-center">
                              <label class="form-label" for="form1">Quantity :</label>
                              <input  id="form1" min="0" name="quantity" value="1" type="number" class="form-control w-50" />
                      
                        </div>
                      <!-- Quantity -->

                       <!-- Price -->
                        <p class="text-start text-md-end">
                            <strong>$17.99</strong>
                        </p>
                      <!-- Price -->

                      <!-- Data -->
                      <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" data-mdb-toggle="tooltip" title="Remove item" type="button"> <i class="bi bi-trash3-fill"></i> </button>
                        <button class="btn btn-danger" data-mdb-toggle="tooltip" title="edit item" type="button"><i class="bi bi-pencil-fill"></i></button>
                      </div>
                      <!-- Data -->
                    </div>
                  </div>
                  <!-- Single item -->
                </div>
              </div>
            </div>

                <!-- right here second  -->
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                  <div class="card mb-4">
                    <div class="card-header py-3">
                      <h5 class="mb-0">1-string</h5>
                    </div>
                    <div class="card-body">
                      <!-- Single item -->
                      <div class="row ">
                        <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d" >
                          <!-- Image -->
                          <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                              <div style="width: 100%; height: 300px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://miro.medium.com/max/1000/0*MFYpYMw1G2Qk1gks.jpg);">
    
                            </div>
                            <a href="#!">
                              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                          </div>
                          <!-- Image -->
                        </div>
          
                        <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                          <!-- Data -->
                          <p><strong>Classical Guitar</strong></p>
                          <p>Color: provincial</p>
                          <p class="text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, provident minima! Deserunt nemo illo suscipit id dicta laudantium accusamus alias officia iure quaerat, minus inventore repellat minima, adipisci corporis ab.</p>
    
                          <!-- Quantity -->
                           <div class="form-outline d-flex justify-content-between align-items-center">
                                  <label class="form-label" for="form1">Quantity :</label>
                                  <input  id="form1" min="0" name="quantity" value="1" type="number" class="form-control w-50" />
                          
                            </div>
                          <!-- Quantity -->
    
                           <!-- Price -->
                            <p class="text-start text-md-end">
                                <strong>$17.99</strong>
                            </p>
                          <!-- Price -->
    
                          <!-- Data -->
                          <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" data-mdb-toggle="tooltip" title="Remove item" type="button"> <i class="bi bi-trash3-fill"></i> </button>
                            <button class="btn btn-danger" data-mdb-toggle="tooltip" title="edit item" type="button"><i class="bi bi-pencil-fill"></i></button>
                          </div>
                          <!-- Data -->
                        </div>
                      </div>
                      <!-- Single item -->
                    </div>
                  </div>
                </div>
               <!-- right here therd  -->
               <div class="col-lg-4 col-md-6 col-sm-6 ">
                <div class="card mb-4">
                  <div class="card-header py-3">
                    <h5 class="mb-0">1-string</h5>
                  </div>
                  <div class="card-body">
                    <!-- Single item -->
                    <div class="row ">
                      <div class="row-cols-1  col-md-12 mb-4 mb-lg-0d" >
                        <!-- Image -->
                        <div class="bg-image hover-overlay hover-zoom ripple rounded w-100" data-mdb-ripple-color="light">
                            <div style="width: 100%; height: 300px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url(https://miro.medium.com/max/1000/0*MFYpYMw1G2Qk1gks.jpg);">
  
                          </div>
                          <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                          </a>
                        </div>
                        <!-- Image -->
                      </div>
        
                      <div class="col-lg-12 col-md-12 mb-4 mb-lg-0">
                        <!-- Data -->
                        <p><strong>Classical Guitar</strong></p>
                        <p>Color: provincial</p>
                        <p class="text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, provident minima! Deserunt nemo illo suscipit id dicta laudantium accusamus alias officia iure quaerat, minus inventore repellat minima, adipisci corporis ab.</p>
  
                        <!-- Quantity -->
                         <div class="form-outline d-flex justify-content-between align-items-center">
                                <label class="form-label" for="form1">Quantity :</label>
                                <input  id="form1" min="0" name="quantity" value="1" type="number" class="form-control w-50" />
                        
                          </div>
                        <!-- Quantity -->
  
                         <!-- Price -->
                          <p class="text-start text-md-end">
                              <strong>$17.99</strong>
                          </p>
                        <!-- Price -->
  
                        <!-- Data -->
                        <div class="d-grid gap-2 d-md-block">
                          <button class="btn btn-primary" data-mdb-toggle="tooltip" title="Remove item" type="button"> <i class="bi bi-trash3-fill"></i> </button>
                          <button class="btn btn-danger" data-mdb-toggle="tooltip" title="edit item" type="button"><i class="bi bi-pencil-fill"></i></button>
                        </div>
                        <!-- Data -->
                      </div>
                    </div>
                    <!-- Single item -->
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
                                                    <!-- item section -->
</body>
<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>