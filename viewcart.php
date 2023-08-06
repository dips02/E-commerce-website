<?php
include_once "../shared/customer-authguard.php";
include "menu.html";
include "../shared/connection.php";

$total=0;
$result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid  where cid=$cid");
echo "<div class='d-flex flex-wrap'>";
while($row=mysqli_fetch_assoc($result))
{
    $cartid=$row['cartid'];
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['detail'];
    $imgpath=$row['imgpath'];

    $total=$total+$price;

    echo "<div class='card' style='width: 19rem;'>
            <img class='pdt-img' src='$imgpath' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$name</h5>
                <h5 class='card-title text-danger'>$price Rs</h5>
                <p class='card-text'>$detail</p>
                <a href='deletecart.php?cartid=$cartid' class='btn btn-danger'>Remove from Cart</a>
            </div>
</div>";
}

echo "</div>";

echo "<div class='place-order gap-3 p-2 ms-3 mt-2 bg-dark w-25'>
        <div class='display-3 text-white'>Rs.$total</div>
        <a href='placeorder.php'>
            <button class='btn btn-warning'>Place Order</button>
        </a>
</div>";

?>