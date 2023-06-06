<?php
include('../dbconnect.php');

$productType = $_POST['productType'];
$Name = $_POST['Name'];
$unit = $_POST['unit'];
$sellingPrice = $_POST['sellingPrice'];
$Description = $_POST['Description'];

$sql = "INSERT INTO `dashboard_items` (`productType`, `Name`, `unit`, `sellingPrice`, `Description`) VALUES ('$productType', '$Name', '$unit', '$sellingPrice', '$Description');";

$form = mysqli_query($conn, $sql);

header("Location: ../../All/allitems.php");