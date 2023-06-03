<?php
include("../dbconnect.php");
$sno = $_GET['editCustomers'];
if (isset($_POST['Customersedit'])) {
    $ecustomerType = $_POST['eCustomer_Type'];
    $esalutation = $_POST['esalutation'];
    $eFname = $_POST['eFname'];
    $eLname = $_POST['eLname'];
    $eCompany_Name = $_POST['eCompany_Name'];
    $ecustomerDisplayName = $_POST['ecustomerDisplayName'];
    $ecustomerEmail = $_POST['ecustomerEmail'];
    $eworkPhone = $_POST['eworkPhone'];
    $eMobile = $_POST['eMobile'];
    $eSkype = $_POST['eSkype'];
    $eDesignation = $_POST['eDesignation'];
    $eDepartment = $_POST['eDepartment'];
    $eWebsite = $_POST['eWebsite'];

    $editSql = "UPDATE `database_customers` SET `customerType`='$ecustomerType',`salutation`='$esalutation',`fName`='$eFname',`lName`='$eLname',`companyName`='$eCompany_Name',`customerDisplayName`='$ecustomerDisplayName',`customerEmail`='$ecustomerEmail',`workPhone`='$eworkPhone',`mobile`='$eMobile',`Skype`='$eSkype',`Designation`='$eDesignation',`Department`='$eDepartment',`website`='$eWebsite', `update_customer`=CURRENT_TIMESTAMP() WHERE `customers_id` = $sno";

    // `update_customer`='[value-16]'

    $editServer = mysqli_query($conn, $editSql);
    
    if ($editServer) {
        echo " Update";
    } else {
        echo "Customer Not Update";
    }
    header("Location: ../../All/allCustomers.php");
}
