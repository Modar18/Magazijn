<?php
  define("SERVERNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "Magazijn");

  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
  $sql = "SELECT * FROM `category`";
?>