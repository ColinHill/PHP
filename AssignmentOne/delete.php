<!DOCTYPE html>
<html>
<head>
    <title>Delete An Employee</title>
</head>
<body>

    <?php

    require_once('dbConn.php');
    $db = getConnection();

    if (isset($_POST['id']))
    {
        $id = $_POST['id'];
        $result = mysqli_query($db,"DELETE FROM actor WHERE actor_id = '" . $id ."';");

        if(!$result)
        {
            die('Could not delete record from the Employees Database: ' . mysqli_error($db));
        }
        Else
        {;
            $affectedRows = mysql_affected_rows($db);
            echo "<p>Successfully deleted " . $affectedRows . " record(s).</p>";
        }
    mysqli_close($db);
    }
    ?>

    <A href="films.php">Back to Employee List</A>

</body>
</html>