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

    $bezittendpersoon = $_POST["bezittendpersoon"];
    $oldbezittendpersoon = $_POST["old-bezittendpersoon"];
    var_dump($_POST['bezittendpersoon']);

    $sql = "UPDATE bezittingen
            SET    bezittendpersoon = :bezittendpersoon

            WHERE  bezittendpersoon = :oldbezittendpersoon";
           

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':bezittendpersoon', $bezittendpersoon);
    $stmt->bindParam(':oldbezittendpersoon', $oldbezittendpersoon);


    $stmt->execute();

    echo "record met bezittendpersoon={$bezittendpersoon} is gewijzigd";
    header("Refresh:3; ./overzichtbezit.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

try {
    $conn = $db->conn;

    $aantal = $_POST["aantal"];
    $oldaantal = $_POST["old-aantal"];
    var_dump($_POST['aantal']);

    $sql2 = "UPDATE bezittingen
            SET    aantal = :aantal

            WHERE  aantal = :oldaantal";

    $stmt = $conn->prepare($sql2);

    $stmt->bindParam(':aantal', $aantal);
    $stmt->bindParam(':oldaantal', $oldaantal);


    $stmt->execute();

    echo "record met aantal={$aantal} is gewzijgid";
    header("Refresh:3; ./overzichtbezit.php");
} catch (PDOException $e) {
    echo $sql2 . "<br>" . $e->getMessage();
}

$conn = null;
