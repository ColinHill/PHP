<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
require_once('dbConn.php');
$db = getConnection();

if(!empty($_POST['birth_date']) && !empty($_POST['first_name']) &&
    !empty($_POST['last_name']) && !empty($_POST['gender']) && !empty($_POST['hire_date']));

$birth_date = $_POST['birth_date'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$hire_date = $_POST['hire_date'];

$query = "INSERT INTO employees (birth_date, first_name, last_name, gender, hire_date)";
$query .= "VALUES ('";
$query .= $birth_date;
$query .= "', '";
$query .= $first_name;
$query .= "', '";
$query .= $last_name;
$query .= "', '";
$query .= $gender;
$query .= "', '";
$query .= $hire_date;
$query .= "');";

$result = mysqli_query($db, $query);

if(!$result)
{
    die('Unable to insert records into employee Database.');
}

$query = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 0, 25";

$result = mysqli_query($db, $query);
if(!$result)
{
    die('Unable to retrieve records from employee Database');
}
?>

<p>Successfully inserted <?php echo mysqli_affected_rows($db); ?> records(s).</p>
<table>
    <thread>
        <th>Emp. Number</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Hire Date</th>
    </thread>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['emp_no']; ?></td>
            <td><?php echo $row['birth_date']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['hire_date']; ?></td>
        </tr>
    <?php
    endwhile;
    mysqli_close($db);
    ?>
    </tbody>
</table>
</body>
</html>