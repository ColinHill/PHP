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

        if (isset($_POST['search']))
        {
            $string = $_POST['search'];
            $string = "%" . $string . "%";
        }
        else
        {
            $message = "Please enter a search term.";
        }

        $db = mysqli_connect("localhost","root", "inet2005","sakila");
                if (!$db)
                {
                      die('Could not connect to the Sakila Database: ' . mysqli_error($db));
                }

                $result = mysqli_query($db,"SELECT * FROM film WHERE description LIKE '$string'");

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

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="FilmSearch">
        <p>Search:
            <input name="search" type="text">
        </p>
        <p>
            <input name="" type="submit">
        </p>
    </form>

</body>
</html>