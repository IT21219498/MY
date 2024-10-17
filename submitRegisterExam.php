<?php

require 'config.php';

$empType = $_POST["eType"];
$sexam = $_POST["exam"];
$empID = $_POST["eID"];
$email = $_POST["email"]; 

$sql = "INSERT INTO examregister(emp_type,exam_type,emp_id,emp_email) VALUES('$empType','$sexam','$empID','$email')";
if($conn->query($sql))
{
    echo "<script> alert ('Records added successfully!!!')</script>";

}
else{
    echo "<script> alert ('ERROR: Could not able to execute the query.')</script>";
}
