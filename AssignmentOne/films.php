<!DOCTYPE html>
<html>
    <head>
         <title>Assignment One - Colin Hill (w0145091)</title>
    </head>
    <body>

    <?php
        session_start();

        require_once('dbConn.php');
        $db = getConnection();

        $_session['search'] = 200;
        $array['ids'] = array();
        $arrayCounter = 0;
        $string = "";
        $string = $_POST['search'];
    ?>

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="EmployeeSearch">
        <p>Search:
            <input name="search" type="text" value="<?php echo $string; ?>" />
        </p>
        <p>
            <input name="" type="submit">


            <input name="pageRow" type="text" value="<?php echo $pageRow; ?>" />
        </p>


    <table border = "1">
        <th>Emp. Number</th><th>Birth Date</th>
        <th>First Name</th><th>Last Name</th>
        <th>Gender</th><th>Hire Date</th>
        <th>Edit Emp</th><th>Delete Emp</th>

        <?php


        if (isset ($_POST['next']))
        {
            $_session['search']+= 25;
        }//end if

        if (isset ($_POST['previous']))
        {
            if(($_session['search']- 25) <= 0)
            {
                $_session['search']= 0;
            }
            else
            {
                $_session['search']-= 25;
            }
        }//end if


        $sqlOrder = "SELECT * FROM employees";

        if (isset($_POST['search']))
        {
            $string = $_POST['search'];
            $string = "%" . $string . "%";
            $sqlOrder .= " WHERE first_name LIKE '$string' OR last_name LIKE '$string'";
        }//end if

        $sqlOrder .= " LIMIT " . $_session['search'] . ",25";

        if (!$db)
        {
            die('Could not connect to the Employees Database: ' . mysqli_error($db));
        }//end if

        $result = mysqli_query($db,$sqlOrder);

        if(!$result)
        {
            die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
        }//end if

        while ($row = mysqli_fetch_assoc($result))
                {
                  echo  "<tr><td>" . $row['emp_no'] ."</td><td>" . $row['birth_date'] . "</td>
                        <td>" . $row['first_name'] ."</td><td>" . $row['last_name'] . "</td>
                        <td>" . $row['gender'] ."</td><td>" . $row['hire_date'] . "</td>";

                         ?>

        <?php

             array_push($array['ids'], $row['emp_no']);


         ?>
        <td>
        <form action="UpdateNow.php"  method="post" name="id_update">
        <input type="hidden" name="id_update" value="<?php echo ($array[ids][$arrayCounter]); ?>"/>
        <input type="submit" value="Update Employee" />
        </form></td>



        <td><form action="delete.php"  method="post" name="id_delete">
        <input type="hidden" name="id_delete" value="<?php echo ($array[ids][$arrayCounter]); ?>"/>
        <input type="submit" value="Delete Employee" />
           </form></td></tr>

            <?php

            $arrayCounter++;

            }//end while

//            Print_r ($array)

                ?>
            </form>
    </table>

        <p>
            <input name="previous" type="submit" value="Previous Page">
            <input name="next" type="submit" value="Next Page" >

        </p>
    </form>

    <form action="InsertRecords.php" method="post" >
        <p>
            <input type="submit" value="Create A New Entry">
        </p>
    </form>

    <?php
        mysqli_close($db);
    ?>

</body>
</html>