<!DOCTYPE html>
<html>
<head>
    <title>Lab #3 - Delete An Actor</title>
</head>
<body>
<p>Welcome To The Film Database</p>

    <?php

    require_once('dbConn.php');
    $db = getConnection();

    if (isset($_POST['first_name']) || isset($_POST['last_name']))
    {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $id = $_POST['id'];

        $result = mysqli_query($db,"UPDATE actor SET first_name =  '" . $fname . "' where actor_id = " . $id . ";");
        $result = mysqli_query($db,"UPDATE actor SET last_name =  '" . $lname . "' where actor_id = " . $id . ";");

        if(!$result)
        {
            die('Could not update record in the Sakila Database: ' . mysqli_error($db));
        }

    }
        Else
        {;
            $affectedRows = mysql_affected_rows($db);
            echo "<p>Successfully updated " . $affectedRows . " record(s).</p>";
        }
    mysqli_close($db);

    ?>

    <A href="PartB.php">Back to Actor List</A>


</body>
</html>