<?php require APPROOT . '/views/inc/header.php'; ?>
<?php
$sql = "SELECT * FROM `artikelen`";


?>
    <link rel="stylesheet" href="css\navbar.css>

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
      <button type="button" class="btn btn-dark float-end">Create</button>
        <table class="table table-light table-hover">
          <thead>
            <tr>
              <!-- <th scope="col">Id</th> -->
              <th scope="col">naam</th>
              <th scope="col">categorie</th>
              <th scope="col">omschrijving</th>
              <th scope="col">prijs</th>
              <th scope="col">update</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            echo $data["artikelen"];
            ?>
          </tbody>
        </table>




</main>
