<?php
    function getConnection(){
        $dbConn = mysqli_connect("localhost","root","inet2005","employees");
        if (!$dbConn){
            die('Could not connect to the Employees Database: ' . mysqli_error($dbConn));
        }
        return $dbConn;
    }//end getConnection()