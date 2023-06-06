<?php
include_once("../dbconnect.php");
// Customerdeletes
if (isset($_GET['Customerdeletes'])) {
    $sno = $_GET['Customerdeletes'];
    $deleteSql = "DELETE FROM `dashboard_customers` WHERE `customers_id` = $sno";
    $deleteServer = mysqli_query($conn, $deleteSql);
    header("Location: ../../All/allCustomers.php");
}

if (isset($_GET['itemsdeletes'])) {
    $sno = $_GET['itemsdeletes'];
    $deleteSql = "DELETE FROM `dashboard_items` WHERE `itemId` = $sno";
    $deleteServer = mysqli_query($conn, $deleteSql);
    header("Location: ../../All/allitems.php");
}

header("Location: ../../dashboard.php");
