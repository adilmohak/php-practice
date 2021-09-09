<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Page</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 0.8em;
        }

        header,
        nav,
        section,
        article,
        footer {
            border: 1px solid grey;
            margin: 5px;
            padding: 8px;
        }

        nav ul {
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 5px;
        }

        header,
        footer {
            color: white;
            background-color: #444;
            margin-bottom: 5px;
        }

        section {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <header>

        <p>welcome <?php echo $_SESSION["username"]; ?></p>
        <h2 style="color:red; background-color:white; text-align:right;"><a href="logout.php"> logout </a></h2>
    </header>
    <nav>
        <ul>


            <li><a href="view.php"> view users</a></li>
            <li><a href="About.php"> About</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <h2>Update</h2>
        </article>
    </section>
    <footer>
        <p>&copy; 2021. all rights reserved</p>
        </p>
</body>

</html>