<?php
    // Let's simulate a slow page load from the Server
    //sleep(2);
            
    $searchValue = "";

    if(!empty($_GET['q']))
    {
        $searchValue = $_GET['q'];

        include("dbConn.php");

        connectToDB();

        selectFilmsWithNameStartingWith($searchValue);


        while ($row = fetchFilms())
        {
                echo $row['title'] . "<br/>";
        }

        closeDB();
    }
?>
           