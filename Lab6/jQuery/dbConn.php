<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 $dbConnection;
 $result;

 function connectToDB()
 {
     global $dbConnection;
     $dbConnection = mysqli_connect("localhost","root", "inet2005","employees");
     if (!$dbConnection)
     {
         die('Could not connect to the Employees Database: ' .
             mysqli_error($dbConnection));
     }
 }

 function closeDB()
 {
     global $dbConnection;
     mysqli_close($dbConnection);
 }

 function selectEmployeesWith($searchString)
 {
     global $dbConnection;
     global $result;

     $sqlStatement = "SELECT * FROM employees WHERE first_name LIKE '$searchString%' OR last_name LIKE '$searchString%' LIMIT 0,10;";

     $result = mysqli_query($dbConnection,$sqlStatement);
     if(!$result)
     {
         die('Could not retrieve records from the Employees Database: ' .
             mysqli_error($dbConnection));
     }

 }

 function fetchEmployees()
 {
     global $dbConnection;
     global $result;
     if(!$result)
     {
         die('No records in the result set: ' .
             mysqli_error($dbConnection));
     }
     return mysqli_fetch_assoc($result);
 }
?>
