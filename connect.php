<?php
$email = filter_input(INPUT_POST , 'email');
$password = filter_input(INPUT_POST , 'password');
$name = filter_input(INPUT_POST , 'name');
$phone = filter_input(INPUT_POST , 'phone');


if (!empty($email))
{
    if (!empty($password))
    {
     $host = "localhost";
     $dbusername = "root";
     $dbpassname = "";
     $dbname = "record";

     $conn = mysqli_connect($host, $dbusername,$dbpassname,$dbname);

     if(mysqli_connect_error())
     {
        die('Connect error ('. mysqli_connect_errno().')'. mysqli_connect_error());
     }
    }


    else 
    {
        echo "Password should not be empty";
        die();
    }
}

else 
    {
        echo "email should not be empty";
        die();
    }
?>