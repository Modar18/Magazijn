<!-- read.php -->
<?php
include("./connect_db.php");

$sql = "SELECT * FROM `category`";
$sqlid = "SELECT `id` FROM `category`";
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
              // <td>" . $record["email"] . "</td>
              // <td>" . $record["cijfer"] . "</td>
              <td>
              <a href='./update.php?id=" . $record['id'] . "'>
              Give rating
             </a>
            </td>
              </tr>";
  //  while ($recordid = mysqli_fetch_assoc($id)){

  //  }

}
?>

<!-- crud opdracht -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>


<body>
  
  <div class="container">
    <h1 class="text-center">Magazijn Categorieen</h1>
    <div class="row">
      <div class="col-12"></div>

    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">naam</th>
          <th scope="col">omschrijving</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
        <tr>
          <?php echo $records; ?>
        </tr>
      </thead>
      <table class="table">
        <h1 class="text-center">Overzicht artikelen </h1>
        <thead>
          <tr>
            <th scope="col">categorie</th>
            <th scope="col">artikel</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

          </tr>
        </thead>
        <tbody>

          <?php
          // echo $records;
          ?>

        </tbody>

      </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <a href="../index.php">Home</a>

</body>

</html>