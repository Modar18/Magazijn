<?php require APPROOT . '/views/inc/header.php'; 
include("./app/models/overzicht_magazijn.php");
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
              <th scope="col">naam</th>
              <th scope="col">omschrijving</th>
              <th scope="col">prijs</th>
              <!-- <th scope="col">update</th>
              <th scope="col">delete</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            // echo $arrays;
            ?>
          </tbody>
        </table>




</main>
