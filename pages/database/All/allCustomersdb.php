<?php
include(dirname(__FILE__)."/../dbconnect.php");
$sql2 = "select * from dashboard_customers";
$result = mysqli_query($conn,$sql2);

while ($row = $result->fetch_assoc()) {
    echo "
            <tr data-id='" . $row["customers_id"] . "'>
                <td><input type='checkbox' name='mdeleteIdCus[]' value='" .  $row["customers_id"] . "'></td>
                <!-- <td style='display:none'>" . $row["customers_id"] . "</td>-->
                <td>" . ucfirst($row["fName"]) . "</td>
                <td>" . $row["companyName"] . "</td>
                <td>" . $row["customerEmail"] . "</td>
                <td>" . $row["workPhone"] . "</td>
                <td>" . $row["create_customer"] . "</td>
                <td>" . $row["update_customer"] . "</td>
                <td>
                <a href='#'>
                    <i id='".$row["customers_id"]."' class='fa-solid fa-pen-to-square Customersedit' style='color: #0fff4b;'></i>
                </a>
                <a href='#'>
                <i id='".$row["customers_id"]."'class='fa-solid fa-trash Customerdeletes' style='color: #ff0000;'></i>
                </a>
                </td>
            </tr>
                ";
}
?>