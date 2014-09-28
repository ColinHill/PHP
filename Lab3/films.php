<!DOCTYPE html>
<html>
    <head>
         <title>Lab #3 - Part A</title>
    </head>
    <body>
    <p></p>

    <table border = "1">
        <th>Film</th><th>Description</th>

        <?php

            $db = mysqli_connect("localhost","root", "inet2005","sakila");
                if (!$db)
                {
                      die('Could not connect to the Sakila Database: ' . mysqli_error($db));
                }

                $result = mysqli_query($db,"SELECT * FROM film LIMIT 0,10");

                if(!$result)
                {
                      die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
                }

                while ($row = mysqli_fetch_assoc($result))
                {
                  echo "<tr><td>" . $row['title'] ."</td><td>" . $row['description'] . "</td></tr>";
                }

                mysqli_close($db);

                ?>
    </table>

</body>
</html>