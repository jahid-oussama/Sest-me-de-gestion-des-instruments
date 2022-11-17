<?php
//INCLUDE DATABASE FILE

use function PHPSTORM_META\elementType;

include('database.php');
//SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
session_start();




//ROUTING
if (isset($_POST['save']))        saveproduct();
if (isset($_POST['delete']))      deleteProduct();
if (isset($_POST['update']))      updateProduct();


function getProducts($cat)
{
    global $conn;

    //requete sql =query
    $sql = " SELECT * from products where category = $cat";

    //execute query conextion requete
    $res = mysqli_query($conn, $sql);
    return $res;
    //CODE HERE
    //SQL SELECT

}


function saveproduct()
{
    global $conn;


    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));


    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'image/products/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                echo "your file is to big !";
            }
        } else {
            echo "there was an error uploading your file";
        }
    } else {
        echo "you can't upload files of this type";
    }



    //CODE HERE
    $title = $_POST['title'];
    $category = $_POST['category'];
    $color = $_POST['color'];
    $quantity = $_POST['quantity'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products
    ( title, category, color, quantity, prix, picture, description)
    VALUES
    ('$title','$category','$color','$quantity','$prix', '$fileNameNew','$description')";

    //execute query conextion requete
    mysqli_query($conn, $sql);

    //SQL INSERT
    $_SESSION['message'] = "product has been added successfully !";
    header('location: index.php');
}

function deleteProduct()
{
    global $conn;

    // input hidden
    $id = $_POST["product-id"];
    $sql = "DELETE FROM `products` WHERE id=$id";

    mysqli_query($conn, $sql);
    //CODE HERE
    //SQL DELETE
    $_SESSION['message'] = "Task has been deleted successfully !";
    header('location: index.php');
}

function updateProduct()
{
    global $conn;
    //CODE HERE
    $title = $_POST['title'];
    $category = $_POST['category'];
    $color = $_POST['color'];
    $quantity = $_POST['quantity'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $id = $_POST['product-id'];


    $sql = "UPDATE `products` SET 
    `title`='$title',
    `category`='$category',
    `color`='$color',
    `quantity`='$quantity',
    `prix`='$prix',
    `description`='$description'
     WHERE
     `id`='$id'";  // input hidden 

    //execute query conextion requete
    mysqli_query($conn, $sql);

    //SQL INSERT
    $_SESSION['message'] = "Task has been updated successfully !";
    header('location: index.php');
}

function signUp()
{
    global $conn;
    if (insset($_POST["submit_signup"])) {
        $name = $_POST["name"];
        $userName = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * from tb_user WHERE username = '$userName' OR email = '$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script> alert('username or email has already taken ') </script>";
        } else {
            if ($password == $confirmPassword) {
                $query = "INSERT INTO tb_user VALUES('','$name', '$userName','$email', '$password')";
                mysqli_query($con, $query);
            }
        }
    }
}

// if (isset($_POST['submitt'])) {
//     $file = $_FILES['file'];

//     $fileName = $_FILES['file']['name'];
//     $fileTmpName = $_FILES['file']['tmp-name'];
//     $fileSize = $_FILES['file']['size'];
//     $fileError = $_FILES['file']['error'];
//     $fileType = $_FILES['file']['type'];

//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));


//     $allowed = array('jpg', 'jpeg', 'png');

//     if (in_array($fileActualExt, $allowed)) {
//         if ($fileError === 0) {
//             if ($fileSize < 1000000) {
//                 $fileNameNew = uniqid('', true) . "." . $fileActualExt;
//                 $fileDestination = 'image/products/' . $fileNameNew;
//                 move_uploaded_file($fileTmpName, $fileDestination);
//                 header("location: index.php?uploadsuccess");
//             } else {
//                 echo "your file is to big !";
//             }
//         } else {
//             echo "there was an error uploading your file";
//         }
//     } else {
//         echo "you can't upload files of this type";
//     }
// }
