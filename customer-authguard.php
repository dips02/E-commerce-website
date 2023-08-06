<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .auth-parent
        {
            display:flex;
            justify-content:space-around;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
    session_start();
    if(!isset($_SESSION['login_status']))
    {
        echo "Illegal attempt";
        die;
    }
    if($_SESSION['login_status']==false)
    {
        echo "Login Failed; Unauthorised Attempt";
        die;
    }
    if($_SESSION['usertype']!='customer')
    {
        echo "Unauthorized USER Type";
        die;
    }

    $cid=$_SESSION['cid'];
    $username=$_SESSION['username'];
    $usertype=$_SESSION['usertype'];
    echo "<div class='auth-parent'>
        <div>$cid</div>
        <div>$username</div>
        <div>$usertype</div>
    </div>";

?>