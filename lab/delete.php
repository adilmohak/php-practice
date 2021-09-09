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
    $query = "DELETE FROM users WHERE id=$id";
    if ($con->query($query) === TRUE)
    {
        echo "Data Deleted";
    }
    else {
        echo "Something went wrong";
    }

    $con->close();
    
?>
