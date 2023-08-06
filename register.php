<?php
   
    // This is for making the database connection (localhost,root,password,database_name)
    $uname=$_POST['username'];
    $upass=$_POST['pass1'];

     //This is for converting the password in encrypted form (cipher text) through tha admin and customer both info will be secured
    $cipher_text=md5($upass);
    include_once "../shared/connection.php"; 
    $status=mysqli_query($conn,"insert into customer(username,password,usertype) values('$uname','$cipher_text','vendor')");
    if($status)
    {
        echo"Registration success";
    }
    else{
        echo"Registration failed something is wrong";
        echo mysqli_error($conn);
    }
?>