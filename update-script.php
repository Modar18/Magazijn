<?php

var_dump($_POST);

// include("../functions.php");
include("../connect_db.php");


$id = ($_POST["id"]);
$naam = sanitize($_POST["naam"]);

$sql = "UPDATE `cateogory` SET `naam` = '$naam' WHERE `id` = $id;";


if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php?content=message&alert=rating-succes");
        header("Location: ./overzicht.php");
} else {
        header("Location: ../index.php?content=message&alert=rating-failed");
}
