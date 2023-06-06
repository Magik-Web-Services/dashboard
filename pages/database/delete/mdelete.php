<?php
include_once("../dbconnect.php");

// MulCustomerdeletes
if (isset($_POST['mDeleteCus'])) {
    if (isset($_POST['mdeleteIdCus']) && !empty($_POST['mdeleteIdCus']) && is_array($_POST['mdeleteIdCus'])) {
        foreach ($_POST['mdeleteIdCus'] as $key) {
            $MdeleteSql = "DELETE FROM `dashboard_customers` WHERE `customers_id` = $key";
            $deleteServer = mysqli_query($conn, $MdeleteSql);

            if ($deleteServer) {
                echo "Delete";
            } else {
                echo "Customer Not Delete";
            }
        }
    }
    // echo "d2";
    header("Location: ../../All/allCustomers.php");
}

// MulCustomerdeletes
if (isset($_POST['mDeleteIT'])) {
    if (isset($_POST['mdeleteIdIT']) && !empty($_POST['mdeleteIdIT']) && is_array($_POST['mdeleteIdIT'])) {
        foreach ($_POST['mdeleteIdIT'] as $key) {
            $MdeleteSql = "DELETE FROM `dashboard_items` WHERE `itemId` = $key";
            $deleteServer = mysqli_query($conn, $MdeleteSql);

            if ($deleteServer) {
                echo "Delete";
            } else {
                echo "Item Not Delete";
            }
        }
    }
    // echo "d2";
    header("Location: ../../All/allitems.php");
}

// echo "d";

// header("Location: ../../dashboard.php");
