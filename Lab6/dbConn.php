<?php
    function getConnection(){
        $dbConn = mysqli_connect("localhost","root","inet2005","sakila");
        if (!dbConn){
            die('Could not connect to the Sakila Database: ' . mysqli_error($dbConn));
        }
        return $dbConn;
    }