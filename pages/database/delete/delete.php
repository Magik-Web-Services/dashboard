<?php
include_once("../dbconnect.php");
// Customerdeletes
if (isset($_GET['Customerdeletes'])) {
    $sno = $_GET['Customerdeletes'];
    $deleteSql = "DELETE FROM `database_customers` WHERE `customers_id` = $sno";
    $deleteServer = mysqli_query($conn, $deleteSql);
    header("Location: ../../All/allCustomers.php");
}

if (isset($_GET['mCustomerdeletes'])) {
    $sno = $_GET['mCustomerdeletes'];
    
    // $deleteSql = "DELETE FROM `database_customers` WHERE `customers_id` = $sno";
    // $deleteServer = mysqli_query($conn, $deleteSql);
    // header("Location: ../../All/allCustomers.php");
}

if (isset($_GET['itemsdeletes'])) {
    $sno = $_GET['itemsdeletes'];
    $deleteSql = "DELETE FROM `database_items` WHERE `itemId` = $sno";
    $deleteServer = mysqli_query($conn, $deleteSql);
    header("Location: ../../All/allitems.php");
}


?>