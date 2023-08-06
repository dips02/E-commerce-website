<?php
    session_start();
    $_SESSION['login_status']=false;
    $uname=$_POST['username'];
    $upass=$_POST['pass1'];

    $login_cipher_text=md5($upass);
    //store the cipher text in database for verification later
    
    include_once "../shared/connection.php"; 
    $query = "select * from customer where username='$uname' and password='$login_cipher_text'";
    
    $result=mysqli_query($conn,$query);

    $row_count=mysqli_num_rows($result);
    if ($row_count==0) 
    {
        echo "Invalid credentails";
    }
    else
    {
        $row=mysqli_fetch_assoc($result);
        print_r($row);
        $_SESSION['login_status']=true;

        $_SESSION["cid"]=$row["cid"];
        $_SESSION["usertype"]=$row["usertype"];
        $_SESSION["username"]=$row["username"];
        if($row['usertype']=="vendor")
        {
            header("location:../vendor/home.php");
        }
        elseif($row['usertype']=="customer")
        {
            header("location:../customer/home.php");
        }
    }
    
?>