<?php

include_once "../shared/customer-authguard.php";

$cid=$_SESSION['cid'];
$pid=$_GET['pid'];

include "../shared/connection.php";

$status=mysqli_query($conn,"insert into cart(cid,pid) values($cid,$pid)");
if($status)
{
    echo "Product Added to cart successfully!";    
    header("location:viewcart.php");
}
else
{
    echo "Unable to add to cart";
    echo mysqli_error($conn);
}

?>