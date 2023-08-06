<?php
include "../shared/vendor-authguard.php";   
include "menu.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .auth-parent{
        display: flex;
        justify-content: space-around;
    }
  </style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
        <form enctype="multipart/form-data" action="upload.php" method="POST" class="w-25 bg-warning p-3">

            <input required class="form-control mt-2" type="text" name="name" placeholder="Product Name">
            <input required class="form-control mt-2" type="number" name="price" placeholder="Product Price">
            <textarea required class="form-control mt-2" name="detail" id="" cols="30" rows="5"></textarea>

            <input required class="form-control mt-2" name="pdtimg" type="file" accept=".jpg">

            <div class="text-center">
                <button class=" mt-3 btn btn-danger">Upload</button>
            </div>
        </form>
        </div>
</body>
</html>
