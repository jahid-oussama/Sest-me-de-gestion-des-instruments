<?php
include 'script.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header('location: first.php');
}
// if (!isset($_SESSION["name"])) header("location:first.php");


$strings = getProducts(1);
$winds = getProducts(2);
$percussions = getProducts(3);








?>
<!DOCTYPE html>
<html lang="en" style=" font-size:0.6rem">

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

<body style="   background-image: url('https://wallpaperset.com/w/full/5/3/8/9809.jpg');
    background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
    <!-- nav bar  -->
    <header class="p-3 mb-3  text-bg-dark">

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