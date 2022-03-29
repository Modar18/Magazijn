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

    // sql delete a record
    $sql = "DELETE FROM artikel WHERE omschrijving=:omschrijving";


    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':omschrijving', $omschrijving);

    if (!isset($_GET['omschrijving'])) {
        header("Location: ./read.php");
        exit();
    }

    $omschrijving = $_GET['omschrijving'];

    $stmt->execute();
    echo "record met omschrijving={$omschrijving} is verwijderd";
    header("Refresh:2; ./read.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
