<?php

$db = mysqli_connect("localhost", "root", "inet2005", "sakila");

function dbClose(){
    global $db;
    mysqli_close($db);
}//end dbClose
?>