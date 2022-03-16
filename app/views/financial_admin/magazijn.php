<?php require APPROOT . '/views/inc/header.php'; ?>
<?php
$sql = "SELECT * FROM `artikelen`";


?>

<main class="container">

<div class="row">
  <div class="col-12">
    <div class="jumpbotron jumpbotron-fluid">
      <div class="container">
        <p class="lead"></p>

      </div>
    </div>

    <div class="row">
      <div class="col-6">
        </form>
      </div>
      <div class="col-12">
        <table class="table table-light table-hover">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Naam</th>
              <th scope="col">Omschrijving</th>
              <th scope="col">Prijs</th>
              <th scope="col">Wijzigen</th>
              <th scope="col">Verwijderen</th>
              <button type="button" class="btn btn-outline-dark">Toevoegen</button>
            </tr>
          </thead>
          <tbody>
            <?php
            // echo $arrays;
            ?>
          </tbody>
        </table>




</main>
