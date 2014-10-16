<!DOCTYPE html>
<html>
    <head>
         <title>Assignment One - Colin Hill (w0145091)</title>
    </head>
    <body>

    <?php
        session_start();
        $_session['search']=[0];
        $_session['ids'] = array();
        $pageRow = 0;
        $arrayCounter = 0;


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
        <th>Edit Emp</th><th>Delete Emp</th>

        <?php

        require_once('dbConn.php');
        $db = getConnection();

        /*
        if (isset ($_POST['next']))
        {
        $_session['search']+=25;
            $pageRow = $_session['search'];
        }//end if

        if (isset ($_POST['previous']))
        {
        if(($_session['search']- 25) <= 0){$_session['search']=0;} else{$_session['search']-=25;};


        }//end if
*/

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
                  echo  "<tr><td>" . $row['emp_no'] ."</td><td>" . $row['birth_date'] . "</td>
                        <td>" . $row['first_name'] ."</td><td>" . $row['last_name'] . "</td>
                        <td>" . $row['gender'] ."</td><td>" . $row['hire_date'] . "</td>
                        <td><a href = 'UpdateNow.php'><img src = 'images/pencil-clip-art.jpg' height = '10%' width = '10%'></a></td>
                        <td><a href = 'delete.php'><img src = 'images/delete-clip-art.png' height = '10%' width = '10%'></a></td></tr>";

                    array_push($_session['ids'], $row['emp_no']);

                 echo '<input type="hidden" name="arrayID';
                 echo($arrayCounter);
                 echo'" value="';
                 echo ($arrayCounter);
                 echo'"/>';


                $arrayCounter++;
                }//end while

                mysqli_close($db);

                ?>
    </table>

        <p>

            <input name="previous" type="submit" value="Previous Page" >
            <input name="next" type="submit" value="Next Page" >

        </p>
    </form>

</body>
</html>