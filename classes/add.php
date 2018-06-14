<?php

   require_once("DB.php");

   $con=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   if($con->connect_error)
   {
    echo "connection failed".$con->connect_error;
   }
   else
   {
    echo "connected";
   }
$fname=$lname=$addess="";

function test_input($data)
{
    $data=htmlspecialchars($data);
    $data=stripslashes($data);
    $data=trim($data);

    return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname=test_input($_POST["fname"]);
    $lname=test_input($_POST["lname"]);
    $address=test_input($_POST["address"]);
}


    $sql="INSERT INTO `employee` (`fname`, `lname`, `address`) VALUES ( '$fname', '$lname', '$address')";

    $result= $con->query($sql);


    echo $fname;

    if($result)
    {
        header('location:crudapp.php');
    }
    else
    {
        echo "error".$con->query_error;
    }


?>