<?php
include_once "../shared/customer-authguard.php";
include "../shared/connection.php";

$result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid  where cid=$cid");

while($row=mysqli_fetch_assoc($result))
{
     $cartid=$row['cartid'];
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['detail'];
    $imgpath=$row['imgpath'];
    $uploaded_by=$row['uploaded_by'];

    $status=mysqli_query($conn,"insert into orders(cid,pid,name,price,detail,imgpath,uploaded_by) values($cid,$pid,'$name',$price,'$detail','$imgpath',$uploaded_by)");

    if($status)
    {
        echo "$name is added to Order Successfully!<br>";
    }
    else{
        echo "Something is wrong,Unable to place order";
    }
}

?>