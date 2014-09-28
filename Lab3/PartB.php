<!DOCTYPE html>
<html>
    <head>
         <title>Lab #3 - Part B</title>
    </head>
    <body>
    <p>Welcome To The Film Database</p>

    <table border = "1">
        <th>Actor ID</th><th>First Name</th><th>Last Name</th><th>Last Update</th>

        <?php

        require_once('dbConn.php');
        $db = getConnection();

        if (isset($_POST['fname']) && isset($_POST['lname']))
        {
                if (!$db)
                {
                      die('Could not connect to the Sakila Database: ' . mysqli_error($db));
                }

            $result = mysqli_query($db,"INSERT INTO actor (first_name, last_name) VALUES ('" . $_POST['fname'] . "','" . $_POST['lname'] . "');");
            $result1 = mysqli_query($db, "SELECT * from actor ORDER BY actor_id DESC LIMIT 10");

                if(!$result)
                {
                      die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
                }
                Else{
                 echo "<p>New record inserted.</p>";
                }

                while ($row = mysqli_fetch_assoc($result1)):
                    ?>

                  <tr>
                      <td><?php echo $row['actor_id'];?></td>
                      <td><?php echo $row['first_name'];?></td>
                      <td><?php echo $row['last_name'];?></td>
                      <td><?php echo $row['last_update'];?></td>
                  </tr>

                   <?php
                endwhile;
        }

                mysqli_close($db);

        ?>
    </table>


</body>
</html>