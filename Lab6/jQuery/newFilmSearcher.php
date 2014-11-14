<?php
header("Cache-Control: no-cache");

$results = "";
$searchExpr = "";


if(!empty($_GET['searchExpr']))
{
    $searchExpr = $_GET['searchExpr'];

    include("dbConn.php");

    connectToDB();

    selectFilmsWithNameStartingWith($searchExpr);


    while ($row = fetchFilms())
    {
            $results .= $row['title'] . "<br/>";
    }

    closeDB();
}

echo $results;


?>


