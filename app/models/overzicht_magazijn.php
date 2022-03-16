<?php
// include("./app\config\config.php");

$sql = "SELECT * FROM `artikelen`";

$result = mysqli_query($conn, $sql);

$arrays = "";
while ($array = mysqli_fetch_assoc($result)) {
  $arrays .= "<tr><th scope='row'>" . $array["id"] . "</th>
              <td>" . $array["naam"] . "</td>
              <td>" . $array["omschrijving"] . "</td>
              <td>" . $array["prijs"] . "</td>
              
            </tr>";
};

?>
