<?php
include("./connect_db.php");
include("./Database.php");

$db = new Database();

$sql = $db->conn->prepare("SELECT * FROM artikel");
$sql->execute();

$sql->setFetchMode(PDO::FETCH_ASSOC);

// Dit is de select query voor het opvragen van alle records uit de tabel users.
// $sql = "SELECT * FROM magazijn";

// // Dit is de functie edie de query $sql via de verbinding $conn naar de database stuurt.

// $result = mysqli_query($conn, $sql);

$records = "";

// De while loop geeft alle gegevens weer uit de tabel users.

while ($record = $sql->fetch()) {
    $records .= "<tr>
            <th>" . $record["omschrijving"] . "</th>
            <td>" . $record["aantal"] . "</td>
            <td>" . $record["category"] . "</td>
            <td>
                    <a href='./updateartikelen.php?omschrijving=" . $record["omschrijving"] . "'>
                        <img src='./img/edit.png' alt='pencil'>
                    </a>
                </td>
                <td>
                    <a href='./delete.php?omschrijving=" . $record["omschrijving"] . "'>
                        <img src='./img/remove.png' alt='remove'>
                    </a>
                </td>
            </tr>
            </td>
            </tr>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Artikel beheer</title>
</head>

<body>
<a href="./index.php"> <h1 style="text-align: center;">Artikel beheer</h1></a>
    <!-- <a href="./create_pagina.php"><button type="button" class="btn btn-secondary btn-lg">Artikel aanmaken</button></a> -->

    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">Artikel naam</th> -->
                <th scope="col">omschrijving</th>
                <th scope="col">aantal</th>
                <th scope="col">categorie</th>
            </tr>
        </thead>
        <tbody>
            <?= $records ?>
           
        </tbody>
    </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>