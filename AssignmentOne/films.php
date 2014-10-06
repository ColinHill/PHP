<!DOCTYPE html>
<html>
    <head>
         <title>Assignment One - Colin Hill (w0145091)</title>
    </head>
    <body>

    <?php
        $string = ($_POST['search']);

    ?>

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="EmployeeSearch">
        <p>Search:
            <input name="search" type="text" value="<?php echo $string; ?>" />
        </p>
        <p>
            <input name="" type="submit">
        </p>


    <table border = "1">
        <th>Emp. Number</th><th>Birth Date</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Hire Date</th>

        <?php

        require_once('dbConn.php');
        $db = getConnection();


        $pageRow = 0;

        if (isset ($_POST['next']))
        {
            $pageRow = ($_POST['nextIndex']);
        }//end if

        if (isset ($_POST['previous']))
        {
            $pageRow = ($_POST['previousIndex']);
        }//end if

        if (isset($_POST['search']))
        {
            $string = $_POST['search'];
            $string = "%" . $string . "%";
        }//end if
        else
        {
            $message = "Please enter a search term.";
        }//end else
        if (!$db)
        {
            die('Could not connect to the Employees Database: ' . mysqli_error($db));
        }//end if

        $sqlOrder = "SELECT * FROM employees WHERE first_name LIKE '$string' OR last_name LIKE '$string' LIMIT $pageRow,25";

        $result = mysqli_query($db,$sqlOrder);

        if(!$result)
        {
            die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
        }//end if

        while ($row = mysqli_fetch_assoc($result))
                {
                  echo "<tr><td>" . $row['emp_no'] ."</td><td>" . $row['birth_date'] . "</td>
                        <td>" . $row['first_name'] ."</td><td>" . $row['last_name'] . "</td>
                        <td>" . $row['gender'] ."</td><td>" . $row['hire_date'] . "</td></tr>";
                }//end while

                mysqli_close($db);

                ?>
    </table>

        <p>
            <input name="previousIndex" type="hidden" value=" <?php if(($pageRow - 25) <= 0){echo ($pageRow = 0);}; ?> ">
            <input name="nextIndex" type="hidden" value=" <?php echo ($pageRow + 25) ?> ">
            <input name="previous" type="submit" value="Previous Page">
            <input name="next" type="submit" value="Next Page">
        </p>
    </form>

</body>
</html>