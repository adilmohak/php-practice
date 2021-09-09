<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
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
    
    echo '
    <form action="add.php" method="post">
        <label for="">Username</label>
        <input type="text" name="un" value="' . $id . '"> <br>
        <label for="">Password</label>
        <input type="password" name="pdw" value="' . $id . '"> <br>
        <input type="submit" name="submit" value="Submit">
    </form> ';
    
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
</body>
</html>