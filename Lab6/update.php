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

if (isset($_POST['update']))
{
 ?>

<form action="UpdateNow.php"  method="post" name="UpdateRecords">
    <p>
        First Name: <input type="text" name="first_name" value="<?php echo @$_POST['first_name']; ?>" >
    </p>
    <p>
        Last Name: <input type="text" name="last_name" value="<?php echo @$_POST['last_name']; ?>" >
    </p>
    <p>
        ID (hidden): <input type="text" name="id" value="<?php echo @$_POST['actor_id']; ?>" >
    </p>
    <input type="submit" name="submit" value="Update" >
</form>

<?php

foreach($db_row_fields as $field_key => $field_value)
{
    $_POST[$field_key] = $field_value;
}

$submit_value = "Update";

    mysqli_close($db);
}
?>
</body>
</html>