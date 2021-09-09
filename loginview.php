<?php

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
        <h2>LOG IN</h2>
    </header>
    <nav>
        <ul>
            <li><a href="index.php"> Home</a></li>
            <li><a href="register.php"> Register</a></li>

        </ul>
    </nav>
    <section>
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <td><label for="uname">user name</label></td>
                    <td><input type="text" name="username" placeholder="Enter usename"><br></td>
                </tr>
                <tr>
                    <td><label for="pwd">password</label></td>
                    <td><input type="password" name="pwd" placeholder="Enter  password"> <br></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Login" value="Login"></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <p>&copy; 2021. all rights reserved</p>
        </p>
</body>

</html>