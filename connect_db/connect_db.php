<?php
  define("SERVERNAME", "localhost");
  define("USERNAME", "Magazijn");
  define("PASSWORD", "");
  define("DBNAME", "Magazijn");

  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  $sql = "SELECT * FROM `category`";
?>