<?php 
// Include config file
require_once "config.php";

$uname=$con->real_escape_string($_POST['username']);
$passwd = $con->real_escape_string($_POST['pwd']);

$query = "INSERT INTO accounts(username, pwd) VALUES('$uname', '$passwd')";
$result = $con->query($query);

if ($con->query($query) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . $con->error;
  }

// if(!$result)
// {
//     $err =1;
// }

// $con->close();

// if(isset($err))
// {
//     header("location: register.php?err=1");
// }
// else
// {
//     header("location: index.php");
// }
