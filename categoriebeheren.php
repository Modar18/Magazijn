<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("./connect_db.php");


$sql = "SELECT * FROM `category`";
$sqlid = "SELECT `naam` FROM `cateogory`";
$id = mysqli_query($conn, $sqlid);
$result = mysqli_query($conn, $sql);
// error afhandeling
$recordid = "";
$records = "";
while ($record = mysqli_fetch_assoc($result)) {
  $records .= "<tr>
              <th scope='row'>" . $record["id"] . "</th>
              <td> " . $record["naam"] . "</td>
              <td>" . $record["omschrijving"] . "</td>
              <td>" . $record["prijs"] . "</td>
              <td>
              <a href='./update.php?id=" . $record['id'] . "'>
              Give rating
              </a>
            </td>
              </tr>";
   while ($recordid = mysqli_fetch_assoc($id)){

   }


}
?>



<table>

</table>




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
