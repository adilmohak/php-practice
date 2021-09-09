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
    $query = "SELECT * FROM users";
    $result = $con->query($query);
    echo '
    <table border="2" cellpadding="5" cellspacing="1" bordercolor="green">
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
    ';

    while($r = $result->fetch_assoc())
    {
        echo '
        <tr>
            <td>' . $r['username'] . '</td>
            <td>' . $r['pass'] . '</td>
            <td> <a href="update.php?id=' . $r['id'] . '">Edit</td>
            <td> <a id="deleteBtn" href="delete.php?id=' . $r['id'] . '">Delete</td>
        </tr>';
    }
    echo '
        </tbody>
    </table>
    ';

    $result->close();
    
?>

<script>
    const deleteBtn = document.getElementById('deleteBtn');
    deleteBtn.addEventListener('click', function () {
        confirm("Are you sure you want to delete this user?")
    })
</script>
