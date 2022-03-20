<?php
// bestanden die nodig zijn voor een connectie met de database
include("./connect_db.php");
include("./Database.php");

// definieren van variabelen die gaan helpen om de database te gebruiken

$db = new Database();

$sql = $db->conn->prepare("SELECT * FROM bezittingen ORDER BY `omschrijving` ASC");
$sql->execute();

$sql->setFetchMode(PDO::FETCH_ASSOC);

$records = "";

// De backend van de tabel die de gevraagde gegevens opvraagt doormiddel van een while loop

while ($record = $sql->fetch()) {
    $records .= "<tr>
    <th>" . $record["omschrijving"] . "</th>
    <td>" . $record["bezittend persoon"] . "</td>
    <td>" . $record["in bezit sinds"] . "</td>
   
    <td>" . $record["category"] . "</td>
    <td>" . $record["Aantal"] . "</td>
    <td>
    </a>
  </td>
    </tr>";
}
// var_dump($records)
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Overzicht bezittingen</title>
</head>
<!-- de frontend van de tabel -->
<body>
    <h1 style="text-align: center;">Overzicht bezittingen</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">omschrijving</th>
                <th scope="col">bezittend persoon</th>
                <th scope="col">in bezit sinds</th>
                
                <th scope="col">category</th>
                <th scope="col">aantal</th>
            </tr>
        </thead>
        <tbody>
            <?= $records ?>
            
        </tbody>
    </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>