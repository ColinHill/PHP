<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once("Circle.php");

        $mySportsCar = new SportsCar("Ferrari","Mike",5,false);
        echo "<h1>" . $mySportsCar->driveFiftyMiles() . "</h1>";
        echo "<h1>Current Mileage: " . $mySportsCar->getMileage() . "</h1>";
        
        // OKAY
        include_once("Shape.php");

        $myCar = new Car("Buggatti","Mike",5);
        echo "<h1>" . $myCar->driveFiftyMiles() . "</h1>";
        echo "<h1>Current Mileage: " . $myCar->getMileage() . "</h1>";
        ?>
    </body>
</html>
