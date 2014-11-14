<?php
header("Cache-Control: no-cache");

$results = "";
$searchExpr = "";

if(!empty($_GET['searchExpr']))
{
    $searchExpr = $_GET['searchExpr'];

    include("dbConn.php");

    connectToDB();

    selectEmployeesWith($searchExpr);

    while ($row = fetchEmployees())
    {
            $results .= $row['first_name'] . " " . $row['last_name'] . "<br/>";
    }

    closeDB();
}

echo $results;


?>


