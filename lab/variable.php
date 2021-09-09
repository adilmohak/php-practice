<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php 
        // declaring a variable
        $name = "Eset";
        $age = 1;
        $isMale = true;
        $height = 1.1;
        $salary = null;

        // Print the variables
        echo $name . '<br>';
        echo $age . '<br>';
        echo $isMale . '<br>';
        echo $height . '<br>';
        echo $salary . '<br>';

        // print type of variables
        echo gettype($name) . '<br>';
        echo gettype($age) . '<br>';
        echo gettype($isMale) . '<br>';
        echo gettype($height) . '<br>';
        echo gettype($salary) . '<br>';
        $cars = [1, 2, 3];
        echo "This is the cars" . gettype($cars);

        // dump
        var_dump($name);
        var_dump(isset($salary));
        var_dump(isset($somethingdidnotexist));

        //constants
        define('PI', 3.14);

        echo PI;


        // class definition
        class User {
            public $name;
            public $age;
            public $id;
            public $dep;
            public $cars = [1, 2, 3];

            function __construct($name, $age=null, $id, $dep=null)
            {
                define("GREETING", "Welcome to W3Schools.com!");
                $this->name = $name;
                $this->age = $age;
                $this->id = $id;
                $this->dep = $dep;
            }
            function __DIR__() {
                return 0;
            }
            function inner() {
                return 12;
            }
        }
        $tempObj = new User("Abebe", 20, 1105, "computer science");
        echo $tempObj->name ;
        echo $tempObj->age ;
        echo $tempObj->id ;
        echo $tempObj->dep ;
        // echo dir("some");

        // class definition
        function temp() {
            return "<br>Hello world";
        }
        echo temp();
    ?>
</body>
</html>