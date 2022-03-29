<?php
// Maak contact met de database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "magazijn";

// include("./connect_db.php");
include("./Database.php");

$db = new Database();

try {
    $conn = $db->conn;

    $omschrijving = $_POST["omschrijving"];
    $oldomschrijving = $_POST["old-omschrijving"];
    var_dump($_POST['omschrijving']);

    $sql = "UPDATE artikel
            SET    omschrijving = :omschrijving

            WHERE  omschrijving = :oldomschrijving";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':omschrijving', $omschrijving);
    $stmt->bindParam(':oldomschrijving', $oldomschrijving);


    $stmt->execute();

    echo "record met omschrijving={$omschrijving} is gewzijgid";
    header("Refresh:5; ./overzicht.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

try {
    $conn = $db->conn;

    $aantal = $_POST["aantal"];
    $oldaantal = $_POST["old-aantal"];
    var_dump($_POST['aantal']);

    $sql2 = "UPDATE artikel
            SET    aantal = :aantal

            WHERE  aantal = :oldaantal";

    $stmt = $conn->prepare($sql2);

    $stmt->bindParam(':aantal', $aantal);
    $stmt->bindParam(':oldaantal', $oldaantal);


    $stmt->execute();

    echo "record met aantal={$aantal} is gewzijgid";
    header("Refresh:5; ./overzicht.php");
} catch (PDOException $e) {
    echo $sql2 . "<br>" . $e->getMessage();
}

$conn = null;
