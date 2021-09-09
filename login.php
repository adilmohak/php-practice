<?php 

define("HOST", "localhost");
define("USER", "root");
define("PWD", "");
define("DB_NAME", "test");

$con = new mysqli(HOST, USER, PWD, DB_NAME);

if($mysqli->connect_errno){
    echo "connection failed: " . $mysqli->connect_error;
    exit();
}
$uname=$con->real_escape_string($_POST['username']);
$passwd = $con->real_escape_string($_POST['pwd']);

$query="SELECT username, pwd FROM accounts WHERE username = '$uname' AND pwd='$passwd'";  

$result = $con->query($query);

if($result->num_rows>=1){

session_start();
                        
// Store data in session variables
$_SESSION["loggedin"] = true;
$_SESSION["username"] = $uname;                            
                            
    header("Location: welcome.php");
}
else{
    header("Location: loginview.php");
}
$con->close();
