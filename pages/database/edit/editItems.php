<?php
include("../dbconnect.php");
$sno = $_GET['editItem'];
if (isset($_POST['editItem'])) {
    $eproductType = $_POST['eproductType'];
    $eName = $_POST['eName'];
    $eunit = $_POST['eunit'];
    $esellingPrice = $_POST['esellingPrice'];
    $eDescription = $_POST['eDescription'];

    $editSql = "UPDATE `dashboard_items` SET `productType`='$eproductType',`Name`='$eName',`unit`=' $eunit',`sellingPrice`='$esellingPrice',`Description`='$eDescription'   WHERE `itemId` = $sno";

    $editServer = mysqli_query($conn, $editSql);

    // if ($editServer) {
    //     echo " Update";
    // } else {
    //     echo "Customer Not Update";
    // }

    header("Location: ../../All/allitems.php");
};
