<!DOCTYPE html>
<html>
<head>
    <title>Delete An Employee</title>
</head>
<body>

    <?php

    require_once('dbConn.php');
    $db = getConnection();

    if (isset($_POST['id_delete']))
    {
        $id = $_POST['id_delete'];
        $result = mysqli_query($db,"DELETE FROM employees WHERE emp_no = '" . $id ."';");

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

    <form action="index.php" method="post" >
        <p>
            <input type="submit" value="Return To Employees Database">
        </p>
    </form>

</body>
</html>