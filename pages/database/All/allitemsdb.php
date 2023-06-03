<?php
include(dirname(__FILE__) . "/../dbconnect.php");
$sql2 = "select * from database_items";
$result = $conn->query($sql2);

while ($row = $result->fetch_assoc()) {
    echo "
            <tr>
                <td></td>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Description"] . "</td>
                <td> ₹" . $row["sellingPrice"] . ".00</td>
                <td>" . $row["unit"] . "</td>
                <td>
                <a href='#'>
                    <i id='" . $row["itemId"] . "'class='itemsedit fa-solid fa-pen-to-square' style='color: #0fff4b;'></i>
                </a>
                <a href='#'>
                <i id='" . $row["itemId"] . "'class='fa-solid fa-trash itemsdeletes' style='color: #ff0000;'></i>
                </a>
                </td>
            </tr>
                ";
}
