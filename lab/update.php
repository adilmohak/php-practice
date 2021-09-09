<?php 
    define("HOST", "localhost");
    define("USER", "root");
    define("PWD", "");
    define("DB_NAME", "sample_db");
    
    $con = new mysqli(HOST, USER, PWD, DB_NAME);
    if ($con->connect_errno) {
        echo "connection failed: " . $con->connect_error;
        exit();
    }
    $id = $_GET['id'];
    $query = "UPDATE users SET username='BBBBBBBBBBBB' WHERE id=$id";
    if ($con->query($query) === TRUE)
    {
        echo "Data Updated";
    }
    else {
        echo "Something went wrong";
    }

    $con->close();
    
?>
