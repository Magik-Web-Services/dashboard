<?php
include('../dbconnect.php');

$customerType = $_POST['Customer_Type'];
$salutation = $_POST['salutation'];
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Company_Name = $_POST['Company_Name'];
$customerDisplayName = $_POST['customerDisplayName'];
$customerEmail = $_POST['customerEmail'];
$workPhone = $_POST['workPhone'];
$Mobile = $_POST['Mobile'];
$Skype = $_POST['Skype'];
$Designation = $_POST['Designation'];
$Department = $_POST['Department'];
$Website = $_POST['Website'];

$sql = "INSERT INTO `dashboard_customers` (`customerType`, `salutation`, `fName`, `lName`, `companyName`, `customerDisplayName`, `customerEmail`, `workPhone`, `mobile`, `Skype`, `Designation`, `Department`, `website`) VALUES ('$customerType', '$salutation', '$Fname', '$Lname', '$Company_Name', '$customerDisplayName', '$customerEmail', '$workPhone', '$Mobile', '$Skype', '$Designation', '$Department', '$Website');";

$form = mysqli_query($conn, $sql);

header("Location: ../../All/allCustomers.php");
